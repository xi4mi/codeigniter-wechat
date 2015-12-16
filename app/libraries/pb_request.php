<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once FCPATH . 'helpers/protobuf/message/pb_message.php';
require_once FCPATH . 'models/proto/portal.proto.php';
require_once FCPATH . 'models/proto/saleprice.proto.php';
require_once FCPATH . 'models/proto/cft.proto.php';
require_once FCPATH . 'models/proto/crs.proto.php';
require_once FCPATH . 'models/proto/pproxy.proto.php';

class Pb_request {
	public $last_error;
	public $last_error_code;
    public $last_potalseq;
    public $last_card_info;
    public $last_send_fail_info;
    public $last_send_fail_errcode;

	function __construct() {
		$CI = &get_instance();
		$CI->load->helper('pb');
		$CI->load->model('common/dealer_hierarchy_mdl','hierarchy_mdl');
		PB::set_dns(PB::DNS_NAME_SALES);
	}
	
	public function query_sup ($sup_dealer_id)
	{
		PB::set_dns(PB::DNS_NAME_SUP);
		$ret = $this->query($sup_dealer_id);
		PB::set_dns(PB::DNS_NAME_SALES);
		return $ret;
	}

	//查询余额
	/**
	 * @param unknown_type $dealer_id
	 * @param unknown_type $amt 金额
	 * @param unknown_type $type 0线上 1线下
	 * @param unknown_type $channel 1、平台币2、微信 100以后为先下方式 101、现金
	 * @param unknown_type $remark 备注
	 * @return number
	 */
	public function query($dealer_id)
	{
		if (ENVIRONMENT == 'development')
			return array(5, 50, 500,'status'=>array(0,0,0));//测试环境的直接返回账户冻结状态因此，status[1]=2
					
		$head = new TS\ServiceHead();
		$head->set_seq(mt_rand())->set_cmdcode('QUERYAMT');
	
		$clientinfo = new TS\ClientInfo();
		$clientinfo->set_clientid($dealer_id)->set_acctid($dealer_id);
	
		$query = new TS\QueryAmt();
		$query->set_head($head)->set_client(0, $clientinfo);
	
		$query_ans = new TS\QueryAmtAns();new TS\SubAcctInfo;
	
		$ret = array(0, 0, 0);//array(现金, 额度, 利润/冻结资金)
		$res = PB::request($query, $query_ans);
		if ($res && NULL != $query_ans->acct(0)) {
			if (NULL != $query_ans->acct(0)->subAcct(0) && NULL != $query_ans->acct(0)->subAcct(0)->amt()) {
				$ret[0] = $query_ans->acct(0)->subAcct(0)->amt() / 10000;//现金账户
			}
			if (NULL != $query_ans->acct(0)->subAcct(1) && NULL != $query_ans->acct(0)->subAcct(1)->amt()) {
				$ret[1] = $query_ans->acct(0)->subAcct(1)->amt() / 10000;//额度账户
			}
			if (NULL != $query_ans->acct(0)->subAcct(2) && NULL != $query_ans->acct(0)->subAcct(2)->amt()) {
				$ret[2] = $query_ans->acct(0)->subAcct(2)->amt() / 10000;//利润/冻结资金 账户
			}
			
			$ret['status'] = array(0, 0, 0);//0未开户 1正常 2冻结
			try {
				$ret['status'] = array(
					0 => $query_ans->acct(0)->subAcct(0)->status(),
					1 => $query_ans->acct(0)->subAcct(1)->status(),
					2 => $query_ans->acct(0)->subAcct(2)->status()
				);
			} catch (Exception $e) {}
		}
		return $ret;
	}

	//批价
    public function get_sale($dealer_id, $product_id, $num = 1)
    {
    	if (ENVIRONMENT == 'development')
    		return 1;//mt_rand(1,100);
    	
        $head = new TS\ServiceHead();
        $head->set_seq(mt_rand())->set_cmdcode('PRICE');

        $clientinfo = new TS\ClientInfo();
        $clientinfo->set_clientid($dealer_id)->set_acctid($dealer_id);
        
        $product_info = new TS\ProductInfo();
        $product_info->set_productid($product_id)->set_productnum($num);
        
        $sale_price = new TS\SalePrice();
        $sale_price->set_head($head)->set_client($clientinfo)->set_product($product_info);
        
        $sale_price_ans = new TS\SalePriceAns();

        $price = NULL;//批价失败返回NULL
        $res = PB::request($sale_price, $sale_price_ans);
        if ($res && NULL != $sale_price_ans->payinfo() && NULL != $sale_price_ans->payinfo()->tranamt()) {
        	$price = floatval($sale_price_ans->payinfo()->tranamt()) / 10000;
        }
        return $price;
    }


    //购买支付（下单）
    /**
     * 
     * @param unknown_type $dealer_id
     * @param unknown_type $product_id
     * @param unknown_type $type 0线上 1线下
     * @param unknown_type $channel 1、平台币2、配额 100以后为先下方式 101、现金
     * @param unknown_type $remark 备注
     */
    public function pay($para)
    {
    	if (ENVIRONMENT == 'development')
    		return TRUE;
    	
        $user_id = $para->user_id;
        $dealer_id = $para->dealer_id;
        $product_id = $para->product_id;
        $tmpid = $para->template_id;
        $dealerprovince = isset($para->saler_province)?$para->saler_province:1;
        $playerid = $para->player;
        $num = isset($para->num)?$para->num:1;
        $itemcode = isset($para->itemcode)?$para->itemcode:1;
        $type = isset($para->type)?$para->type:0;
        $remark = isset($para->remark)?$para->remark:'';
        $channel = isset($para->channel)?$para->channel:1;
        $ip = isset($para->ip)?$para->ip:'';
        $product_type = $para->product_type;
        $custom_price = $para->custom_price;
       /*//虚拟卡密
        if($product_type == 1){
            $product_type = 2;
        }
        //卡密直充
        else if($product_type == 2){
            $product_type = 3;
        }
        //手工订单
        else if($product_type == 3){
            $product_type = 4;
        }
        //自动充值
        else{
            $product_type = 0;
        }*/

        $mythis = &get_instance();
        $mythis->buy_log->log('\n这是在pay_requesr中的参数哦》》》时间：'.date('Y-m-d H:i:s',time()).',user_id:'.$user_id.',dealer_id:'. $dealer_id
            .',product_id:'. $product_id
            .',tmpid:'.$tmpid.',playerid:'.$playerid.',num:'. $num
            .',itemcode:'.$itemcode.',dealerprovince:'
            . $dealerprovince.',zone:'.$para->zone.',product_type:'.$product_type);

    	//支付
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('PAY');
    	 
    	$clientinfo = new TS\ClientInfo();
    	$clientinfo->set_clientid($dealer_id)->set_acctid($dealer_id);
    	
    	$product_info = new TS\ProductInfo();
    	$product_info->set_productid($product_id)->set_productnum($num)->set_playerid($playerid)->set_producttmpid($tmpid);
        //发货省份
        if(!is_null($dealerprovince) && $dealerprovince!=''){
            $product_info->set_salerprovince($dealerprovince);
        }

        //默认情况，itemcode当作gameid,如腾讯的包月
        /*if(!is_null($itemcode) && $itemcode!=''){
            $product_info->set_gameid($itemcode);
        }*/

        $product_info->set_area($para->zone);
        $product_info->set_server($para->server);
        $product_info->set_accounttype($para->player_type);
        $product_info->set_gameid($para->game_code);
        $product_info->set_consumemode($para->consumemode);
        $product_info->set_userip($ip);
        /*$product_info->set_providemode($product_type);//商品类型
        $mythis->buy_log->log("\nproduct_type：".$product_type);*/
        $product_info->set_roleaccount($para->roleaccount);
        $product_info->set_gamename($para->game_name);

        $product_param_num = 0;

        switch($para->company){
            case '腾讯':
                $product_param = new TS\ProductParam();
                $product_param->set_key("item_type")->set_value($para->item_type);
                $product_info->set_productparamlist($product_param_num++,$product_param);
                break;
        }

        $product_param = new TS\ProductParam();
        $product_param->set_key("custom_price")->set_value($custom_price);
        $product_info->set_productparamlist($product_param_num++,$product_param);

    	$pay_info = new TS\PayInfo();
        $pay_info->set_paytype($type)->set_remark($remark)->set_userid($user_id);

    	$pay = new TS\Pay();
    	$pay->set_head($head)->set_client($clientinfo)->set_product($product_info)->set_payinfo($pay_info);
    	$pay_ans = new TS\PayAns();

        $res = PB::request($pay, $pay_ans,$result_code, $result_info,$potalseq,$card_info);
        $this->last_potalseq = $potalseq;
        $this->last_card_info = $card_info;
        if(isset($card_info['card_no'])){
            $mythis->buy_log->log("\n虚拟卡密：".$card_info['card_no']);
        }
        if (!$res) {
            $this->last_error = $result_info;
            $this->last_error_code = $result_code;

            $mythis->buy_log->log("\n错误码：".$result_code.",错误描述：".$result_info);
            return FALSE;
        }
        $mythis->buy_log->log("\npotal序列号：".$potalseq);
        return TRUE;
    }
    
    /**
     * 查询发货状态
     * @param $portalseq
     * @return bool
     */
    public function query_provide($portalseq){
        $head = new TS\ServiceHead();
        $head->set_seq(mt_rand())->set_cmdcode('QUERYPROVIDE');
        $head->set_portalseq($portalseq);

        $queryProvide = new TS\QueryProvide();
        $queryProvide->set_head($head);

        $queryProvideAns = new TS\QueryProvideAns();
        $res = PB::request($queryProvide,$queryProvideAns,$result_info);//$res为true 或者 false

        //如果查询失败
        if (!$res) {
            $this->last_error = $result_info;
            return -1;
        }else{
            $order_status = $queryProvideAns->type();//订单状态
            $this->last_send_fail_info = $queryProvideAns->head()->errinfo();//错误信息
            $this->last_send_fail_errcode = $queryProvideAns->head()->errorcode();//错误码
            $mythis = &get_instance();
            $mythis->buy_log->log('返回码：'.$queryProvideAns->head()->resultcode().',错误码:'.$queryProvideAns->head()->errorcode().',描述信息：'.$queryProvideAns->head()->errinfo().'<<<<');
            return $order_status;
        }
    }

    /**
     * 批量拉取订单
     */
    public function list_orders ($dealer_id, $tmpid_arr)
    {
    	if (ENVIRONMENT == 'development')
    		return TRUE;
    
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('GETORDERLIST');
    
    	
    	$getOrder = new TS\GetOrderList();
    	$getOrder->set_head($head)->set_top_dealerid($dealer_id);
    	
    	foreach ($tmpid_arr as $i=>$tmpid) {
    		$getOrder->set_producttmpid($i, $tmpid);
    	}
    	
    	$getOrder_ans = new TS\GetOrderListAns();
    	$res = PB::request($getOrder, $getOrder_ans, $result_info);
    	if (!$res) {
    		$this->last_error = $result_info;
    		return FALSE;
    	}
    	
    	$arr_orders = array();
    	$ordernum = $getOrder_ans->orderlist_size();
    	for ($i=0; $i<$ordernum; $i++) {
    		$arr_orders[] = $getOrder_ans->orderlist($i)->toObject();
    	}

    	return $arr_orders;
    } 
    
    /**
     * 预发货
     */
    public function pre_send ($portalseq, $user_id = NULL)
    {
    	if (ENVIRONMENT == 'development')
    		return TRUE;

    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('PREPROVIDE')->set_portalseq($portalseq);

    	$product = new TS\ProductInfo();
    	$product->set_providerid($user_id?$user_id:'');
    	
    	$pay = new TS\Pay();
    	$pay->set_head($head)->set_product($product);
    	$pay_ans = new TS\PayAns();
    	
    	$res = PB::request($pay, $pay_ans,$result_code, $result_info,$potalseq);
        $this->last_potalseq = $potalseq;
    	if (!$res) {
    		$this->last_error = $result_info;
            $this->last_error_code = $result_code;
    		return NULL;
    	}

    	return $pay_ans->toObject();
    }
    
    /**
     * 确认发货
     */
    public function confirm_send ($portalseq, $result_code, $result_info = '',$error_code = 0)
    {
    	if (ENVIRONMENT == 'development')
    		return TRUE;
    
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('PROVIDECALLBACK')->
    	set_portalseq($portalseq)->set_resultcode($result_code)->
    	set_errinfo($result_info)->set_errorcode($error_code);
    
    	$pay = new TS\Pay();
    	$pay->set_head($head);
    	$pay_ans = new TS\PayAns();
    	 
    	$res = PB::request($pay, $pay_ans,$result_code, $result_info,$potalseq);
    	$this->last_potalseq = $potalseq;
    	if (!$res) {
    		$this->last_error = $result_info;
    		$this->last_error_code = $result_code;
    		return NULL;
    	}

    	return $pay_ans->toObject();
    }

    /**
     * 退款
     * @param unknown_type $dealer_id
     * @param unknown_type $product_id
     * @param unknown_type $type 0线上 1线下
     * @param unknown_type $channel 1、平台币2、配额 100以后为先下方式 101、现金
     * @param unknown_type $remark 备注
     */
    public function rollback ($portalseq, $result_info = '')
    {
    	if (ENVIRONMENT == 'development')
    		return TRUE;
    
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('ROLLBACK')->set_portalseq($portalseq)->set_errinfo($result_info);
    
    	$clientinfo = new TS\ClientInfo();
    	$clientinfo->set_clientid(0)->set_acctid(0);
    	
       	$pay = new TS\Pay();
    	$pay->set_head($head)->set_client($clientinfo);
    	$pay_ans = new TS\PayAns();
    	$res = PB::request($pay, $pay_ans,$result_code, $result_info);
    	if (!$res) {
    		$this->last_error = $result_info;
    		$this->last_error_code = $result_code;
    		return FALSE;
    	}

    	return TRUE;
    }

    //额度充值
    /**
     * @param unknown_type $type 0线上 1线下
     * @param unknown_type $channel 1、平台币2、配额 100以后为先下方式 101、现金
     * @param unknown_type $remark 备注
     * 
     * return 0成功 其他失败
     */
     public function trans ($from_dealer_id, $to_dealer_id, $amt, $remark = '', $type = 0, $channel = 2)
     {
     	/*
     	if (ENVIRONMENT == 'development')
     		return true;
      	*/
    	$head = new TS\ServiceHead();
	    $head->set_seq(mt_rand())->set_cmdcode('TRANQUOTA');
	    
	    $from_client = new TS\ClientInfo();
	    $from_client->set_clientid($from_dealer_id)->set_acctid($from_dealer_id);
	    
	    $to_client = new TS\ClientInfo();
	    $to_client->set_clientid($to_dealer_id)->set_acctid($to_dealer_id);
	     	    
	    $pay_info = new TS\PayInfo();
	    $pay_info->set_paytype($type)->set_channel($channel)->set_remark($remark)->set_tranamt($amt*10000);
	     
	    $trans = new TS\TransAmt();
	    $trans->set_head($head)->set_from_client($from_client)->set_to_client($to_client)->set_pay_info($pay_info);
	    $trans_ans = new TS\TransAmtAns();

	    $res = PB::request($trans, $trans_ans, $result_code, $result_info);
	    if($res) 
	    	return $trans_ans->head()->portalseq();
	    else {
	    	$this->last_error = $result_info;
	    	$this->last_error_code = $result_code;
	    	return false;
	    }
	    
	    /*
	    if ($res && NULL != $trans_ans->payinfo() && NULL != $trans_ans->payinfo()->remainamt()) {
	    	return floatval($trans_ans->payinfo()->remainamt()) / 10000;
	    }
	    */

    }
    
    //额度扣除
    /**
     * @param unknown_type $type 0线上 1线下
     * @param unknown_type $channel 1、平台币2、配额 100以后为先下方式 101、现金
     * @param unknown_type $remark 备注
     *
     * return true成功 false其他失败
     */
     public function deduct ($top_dealer, $dealer_id, $amt, $remark = '')
     {
		
		if (ENVIRONMENT == 'development')
			return '开发环境专属流水号10000';
	    $head = new TS\ServiceHead();
	    $head->set_seq(mt_rand())->set_cmdcode('SUBQUOTA');
	    	 
	    $from_client = new TS\ClientInfo();
	    $from_client->set_clientid($dealer_id)->set_acctid($dealer_id);
	     
	    $to_client = new TS\ClientInfo();
	    $to_client->set_clientid($top_dealer)->set_acctid($top_dealer);
	     
	    $pay_info = new TS\PayInfo();
	    $pay_info->set_paytype(0)->set_channel(2)->set_remark($remark)->set_tranamt($amt*10000);
	    
	    $trans = new TS\TransAmt();
	    $trans->set_head($head)->set_from_client($from_client)->set_to_client($to_client)->set_pay_info($pay_info);
	    $trans_ans = new TS\TransAmtAns();
	    
	    $res = PB::request($trans, $trans_ans, $result_code, $result_info);
	    if($res)
	    	return $trans_ans->head()->portalseq();
	    	//return true;
	    else {
	    	$this->last_error = $result_info;
	    	$this->last_error_code = $result_code;
	    	return false;
	    }    
    }
    
    /**
     * 财付通充值下单
     * @param unknown_type $dealer_id
     * @param unknown_type $amt 金额
     * @param unknown_type $requestparam 财付通充值参数
     * @param unknown_type $remark 
     * @param unknown_type $type 0线上 1线下
     * @param unknown_type $channel 1、平台币2、配额 100以后为先下方式 101、现金
     * @return CFTChargeAns|NULL
     */
    public function cft_order ($dealer_id, $amt, $requestparam, $remark = '', $type = 0, $channel = 2) {
    	if (ENVIRONMENT == 'development')
    		return $this->get_token_front($requestparam);   //前端模拟的
    	    	
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('CFTORDER');
    	
    	$client = new TS\ClientInfo();
    	$client->set_clientid($dealer_id)->set_acctid($dealer_id);

    	$pay_info = new TS\PayInfo();
    	$pay_info->set_paytype($type)->set_channel($channel)->set_remark($remark)->set_tranamt($amt*100);
    	
    	$cft_charge = new TS\CFTCharge();
    	$cft_charge->set_head($head)->set_type('cft')->set_client($client)->set_pay($pay_info)->set_content($requestparam);

    	$cft_charge_ans = new TS\CFTChargeAns();
    	
    	$res = PB::request($cft_charge, $cft_charge_ans);
    	if ($res && NULL != $cft_charge_ans->orderid() && NULL != $cft_charge_ans->content()) {
    		return $cft_charge_ans->content();
    	}
    	
    	return NULL;
    }
    
    /**
     * 财付通获取token接口
     * @param unknown_type $requestparam
     * @return NULL
     */
    public function cft_token ($requestparam) {
    	if (ENVIRONMENT == 'development')
    		return $this->get_sign_front($requestparam);  //前端模拟产生sign
    	
    	$params = explode('&',$requestparam);
    	$parameters = array();
    	foreach($params as $item){
    		$tmp = explode('=',$item);
    		$parameters[$tmp[0]]=urldecode($tmp[1]);
    	}
    	$dealer_id = $parameters['attach'];
    	
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('CFTTOKEN');
    	 
		$client = new TS\ClientInfo();
    	$client->set_clientid($dealer_id)->set_acctid($dealer_id);
    	
    	$cft_charge = new TS\CFTCharge();
    	$cft_charge->set_head($head)->set_type('cft')->set_client($client)->set_content($requestparam);
    	
    	$cft_charge_ans = new TS\CFTChargeAns();
    	 
    	$res = PB::request($cft_charge, $cft_charge_ans);
    	if ($res && NULL != $cft_charge_ans->token()) {
    		return $cft_charge_ans->token();
    	}
    	return NULL;
    }
    
    /**
     * 财付通订单支付完成确认
     * @param unknown_type $dealer_id
     * @param unknown_type $cft_charge_ans
     * @return boolean
     */
    public function cft_charge ($dealer_id, $amt, $requestparam, $orderid) {
    	if (ENVIRONMENT == 'development')
    		return TRUE;
    	
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('CFTCHARGE');
    	
    	$client = new TS\ClientInfo();
    	$client->set_clientid($dealer_id)->set_acctid($dealer_id);

    	$pay_info = new TS\PayInfo();
    	$pay_info->set_tranamt($amt*100);
    	
    	$cft_charge = new TS\CFTCharge();
    	$cft_charge->set_head($head)->set_type('cft')->set_client($client)->set_pay($pay_info)->set_orderid($orderid)->set_content($requestparam);

    	$cft_charge_ans = new TS\CFTChargeAns();
    	
    	$res = PB::request($cft_charge, $cft_charge_ans);
    	if ($res) {
    		return TRUE;
    	}
    	
    	return FALSE;
    }
   
    /**
     *
     * 提现
     * @param  $dealerid  商家id
     * @param  $amount	提现金额，单位分
     * @param  $targetAcctNo	财付通账户号码
     * @param  $banktype	转入账户类型，默认是cft
     */
    public function withdraw($params=array()){
    	$result = array('ret'=>0, 'err_msg'=>'');
    	
    	if (ENVIRONMENT == 'development')
    		return ;
    	
    	$params['acct_name'] = iconv('utf8', 'gb2312', $params['acct_name']);
    	
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode('WITHDRAW');
    	 
    	$client = new TS\ClientInfo();
    	$client->set_clientid($params['dealer_id'])->set_acctid($params['dealer_id']);
    	
    	$cftinfo = new TS\CFTInfo();
    	$cftinfo->set_cftacctid($params['cft_no'])->set_cftacctname($params['cft_name'])->set_payamt($params['amount'])->set_remark($params['remark']);
    	
    	$withdraw = new TS\Withdraw();
    	$withdraw->set_head($head)->set_client($client)->set_cft($cftinfo);
    	
    	$withdraw_ans = new TS\WithdrawAns();
    	 
    	$res = PB::request($withdraw, $withdraw_ans, $errinfo);
    	if (!$res) {
    		$result['ret'] = -1;
    		$result['err_msg'] = $errinfo;
    	}
    	
    	return $result;
    }
    
    
    /**
     * 冻结解冻
     * @param  $target 目标用户
     * @param  $type 类型 0冻结 1解冻
     * @param  $amount
     * @param  $remark
     */
    public function freeze_finance($target_id, $type, $amount, $remark, &$errcode = 0, &$errinfo = ''){
    	$result = false;
    	 
    	if (ENVIRONMENT == 'development')
    		return true;
    	 
    	$cmdcode = $type==0? 'FREEZE' : 'UNFREEZE';
    	$head = new TS\ServiceHead();
    	$head->set_seq(mt_rand())->set_cmdcode($cmdcode);
    
    	$client = new TS\ClientInfo();
    	$client->set_clientid($target_id)->set_acctid($target_id);
    	
    	$pay_info = new TS\PayInfo();
    	$pay_info->set_tranamt($amount*100)->set_remark($remark);
    	
    	$alter_acct = new TS\AlterAcct();
    	$alter_acct->set_head($head)->set_client($client)->set_pay($pay_info);
    	
    	$alter_acct_ans = new TS\AlterAcctAns();
       
    	$res = PB::request($alter_acct, $alter_acct_ans, $errcode, $errinfo);
    	if (!$res) {
    		return false;
    	}
    	
    	return true;
    }
    
    //////////////////////////////////////////////////////////////////////
    
    /**
     * $dealer_id 当前经销商id
     * $t_dealer_id 当前经销商的顶级经销商id
     */
    /**
     * 获取所有下级
     * @param unknown_type $dealer_id
     * @param unknown_type $t_dealer_id
     * @return multitype:NULL
     */
    public function get_children ($dealer_id, $t_dealer_id, $dealer_type = NULL) {
        	
    	$res = array();
    	
    	$ins = &get_instance();
    	$arr_dealer = $ins->hierarchy_mdl->list_dealer_id_by_top($t_dealer_id);
    
    	$arr_dealer_hash = array();
		foreach ($arr_dealer as $obj_dealer) {
			$arr_dealer_hash[$obj_dealer->dealer_id] = $obj_dealer;
		}
		
		foreach ( $arr_dealer_hash as $k => $obj_dealer ) {
			if ($dealer_id != $t_dealer_id && !isset($arr_dealer_hash[$obj_dealer->f_dealer_id])) {
				continue;
			}
			if (!isset($obj_dealer->children)) {
				$obj_dealer->children = array();
			}
			
			$f_obj_dealer = &$arr_dealer_hash[$obj_dealer->f_dealer_id];
			if (!isset($f_obj_dealer->children)) {
				$f_obj_dealer->children = array();
			}
			
			$f_obj_dealer->children[$k] = $obj_dealer;
		}
			
		if (!isset($arr_dealer_hash[$dealer_id])) {
			return array();
		}
		
		$tmp_arr =  $arr_dealer_hash[$dealer_id]->children;
		
		while (!empty($tmp_arr)) {
			$tmp = array();
			foreach ($tmp_arr as $k=>$obj) {
				if (empty($dealer_type) or $obj->dealer_type == $dealer_type) $res[] = $obj->dealer_id;
				$tmp = array_merge($tmp, $obj->children);
			}
			$tmp_arr = $tmp;
		}
				
    	return $res;
    }

    /* 商户号 */
    protected $partner = "1900000109";
    
    /* 密钥 */
    protected $key = "8934e7d15453e97507ef794cf7b0519d";
    
    /**
     * 获取财付通url
     *  后台补充订单号、partner、签名信息后，再将参数作为字符串传给php
     * @param int $requestparam  传递参数
     * 返回： 增加了签名等信息后的
     */
    private function get_token_front($requestparam){
    	$out_trade_no = '1004201402271526';
    	$params = explode('&',$requestparam);
    
    	$parameters = array();
    	foreach($params as $item){
    		$tmp = explode('=',$item);
    		$parameters[$tmp[0]]=urldecode($tmp[1]);
    	}
    	 
    	$parameters['out_trade_no'] = $out_trade_no;
    	$parameters['partner'] = $this->partner;
    	$parameters['time_start'] = '20140227151323';
    	$signPars = "";
    	ksort($parameters);
    	foreach($parameters as $k => $v) {
    		if("" != $v && "sign" != $k) {
    			$signPars .= $k . "=" . $v . "&";
    		}
    	}
    	$signPars .= "key=" . $this->key;

    	$sign = strtolower(md5($signPars));
    	$parameters['sign'] = $sign;
    
    	$reqPar = "";
    	ksort($parameters);
    	foreach($parameters as $k => $v) {
    		$reqPar .= $k . "=" . urlencode($v) . "&";
    	}
    	//去掉最后一个&
    	$reqPar = substr($reqPar, 0, strlen($reqPar)-1);
    
    	return $reqPar;
    }
    
   
    /**
     *
     * 获取签名
     * @param string $requestparam  请求字符串
     * 返回    签名字符串
     */
    private function get_sign_front($requestparam){
    	 
    	$params = $requestparam . "&key=" . $this->key;
    	$sign = strtolower(md5($params));
    	return $sign;
    }
    
    /**
     *
     * 充值
     * @param int $dealer_id  需要充值的商家id
     * @param unknown_type $requestparam	财付通发货字符串（含notifyid，total_fee 等信息）
     * @param unknown_type $sign  签名串，用来校验$requestparam没有被篡改
     */
    private function psc_request($dealer_id,$requestparam, $sign){
    	$result['ret'] = '0';
    	$result['err_msg'] = '';
    	return $result;
    }
}
