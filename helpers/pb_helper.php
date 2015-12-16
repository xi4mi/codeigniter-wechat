<?php
require_once __DIR__ . '/protobuf/message/pb_message.php';
require_once __DIR__ . '/tp_netclient_helper.php';

class PB {
	
	const PORTAL_TIMEOUT = 5;
	const DNS_NAME_SALES = 'TSALES_PORTAL_1';
    const DNS_NAME_SUP = 'TSUP_PORTAL_1';
	
	static $dns_object = NULL;
    static $portal_name = '';
    static $CI;
	static public function set_dns ($dns_name) {
        static::$portal_name = $dns_name;
		if (ENVIRONMENT == 'development') {
			return TRUE;
		}
		
		if (function_exists('portal_get_dns')) {
			static::$dns_object = portal_get_dns($dns_name); 
		}
		
		if (!isset(static::$dns_object)) {
			//return FALSE;
			$CI = &get_instance();
			static::$dns_object = new stdClass();
			static::$dns_object->ip = $CI->config->config['dns_ip'];
			static::$dns_object->port = $CI->config->config['dns_port'];
		}
		
		return TRUE;
	}

    static public  function  log_buy_info($info){
        if(!isset($CI))
            $CI = &get_instance();
        if(static::$portal_name == self::DNS_NAME_SALES){
            $CI->buy_log->log("\n".$info);
        }
    }
    /**
     * 调用后台接口
     * @param PBMessage $pb_obj
     * @param PBMessage $ret_obj
     * @return bool
    */
    static public function request (PBMessage $pb_obj, PBMessage $ret_obj,&$result_code='', &$result_info='',&$potalseq='',&$card_info=array())
	{
		if (!isset($pb_obj->name)) return FALSE;

		// serialize
		$string = pack('a20nn', $pb_obj->name, 0, 1) . $pb_obj->SerializeToString();
		$pkg = pack('N', strlen($string)) . $string;
		
		if (empty(static::$dns_object) or !isset(static::$dns_object->ip) or !isset(static::$dns_object->port)) {
            static::log_buy_info("DNS解析出错");
            return FALSE;
		}
		
        //建立TCP连接
		$client = new TP_NetClient_TCP;
		if(@$client->connect(static::$dns_object->ip, static::$dns_object->port, self::PORTAL_TIMEOUT)) {
			$client->send($pkg);//发包
			$ret = @$client->recv();//收包
		} else {
            static::log_buy_info("建立TCP连接出错");
			return FALSE;
		}

        $arr = @unpack('Nlen/a20name/ncode/nver', substr($ret, 0, 28));
        if (!isset($arr) or $arr['len'] <= 0) {
            static::log_buy_info("解析回包错误");
            return FALSE;
        }
        $data = substr($ret, 28, $arr['len']);
		
		$ret_obj->parseFromString($data);

        $potalseq = $ret_obj->head()->PortalSeq();
        //如果请求为pay
        if($pb_obj->head()->CmdCode()=='PAY'){
            $a = $ret_obj->product();
            if(empty($a)){
                static::log_buy_info("payans 中的product数据为空！\n ");
            }else{
                //$card_no = $ret_obj->product()->productparamlist('CardIdList');
                //$card_no = $ret_obj->product()->productparamlist(1)->value();
                for($i=0;$i<$ret_obj->product()->productparamlist_size();$i++){
                    $key = $ret_obj->product()->productparamlist($i)->key();
                    if($key=='CardIdList'){
                        $card_info['card_no'] = $ret_obj->product()->productparamlist($i)->value();
                        static::log_buy_info("card_no信息：". $card_info['card_no']);
                        break;
                    }
                }
                $point = $ret_obj->product()->storagelistpoint();
                if($ret_obj->product()->storageinfolist_size()>0){
                    $card_info['storage_type'] = $ret_obj->product()->storageinfolist($point)->storagetype();
                    static::log_buy_info("storagetype 信息：". $card_info['storage_type'] );
                }

            }
        }

        //请求失败
		if ($ret_obj->head()->CmdCode() != $pb_obj->head()->CmdCode() or $ret_obj->head()->ResultCode() != 0) {
            $result_code = $ret_obj->head()->ResultCode();
            $result_info = $ret_obj->head()->ResultInfo();

            //static::log_buy_info("\nResultCode:".$ret_obj->head()->ResultCode()."|Errorcode:".$ret_obj->head()->Errorcode()."|Errinfo:".$ret_obj->head()->Errinfo());
			//echo '<pre>', $ret_obj->head()->ResultCode(), "\n",  $ret_obj->head()->Errorcode(), "\n",  $ret_obj->head()->Errinfo();
			return FALSE;
		}

        return TRUE;
	}
}
