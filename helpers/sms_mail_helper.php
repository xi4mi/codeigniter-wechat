<?php
/*
 * Created on 2014-2-19
 *
 */
 
require_once __DIR__ . '/tp_netclient_helper.php';

class Sms_mail{
	const TIMEOUT = 2;
	const VER_CODE_LEN = 6;//验证码长度
	const VER_SESSION_NAME = 'verfiy_code'; 
	const SESSION_EXPIR_TIME_NAME = 'SMS_EXPRIT_TIME';
	const SESSION_EXPIR_TIME = '120';//秒
	const TYPE_VERY_CODE = 1;//短消息类型 1表示验证码类型
	/**
	 * 对外发送短信接口
	 * 参数
	 * 
	 * $tel 手机号码
	 * $msg 信息内容，仅用于发送验证码，且只支持GBK编码
	 * 
	 * 返回值
	 * json array 0 success ,-1 fail
	 */
	public  function send_sms($tel,$msg_type = 1){
		return array('ret'=>0,'_log'=>'发送成功');
		if (ENVIRONMENT == 'development'){
			return array('ret'=>0,'_log'=>'发送成功');
		}
		@session_start();
		if(isset($_SESSION[self::SESSION_EXPIR_TIME_NAME]) and (time() - $_SESSION[self::SESSION_EXPIR_TIME_NAME])<60){
			return array('ret'=>-2,'_log'=>'服务器繁忙，请稍后再试');
		}
		
		//get host
		$CI = &get_instance();
		$CI->config->load('setting');
		
		//建立TCP连接
		$client = new TP_NetClient_TCP;
		if(@$client->connect($CI->config->item('sms_host'), $CI->config->item('sms_port'), self::TIMEOUT)) {
			$pkg=$this->gen_msg($tel,$msg_type);
			$client->send($pkg);//发包
			$ret = json_decode(@$client->recv());//收包
			if($ret && $ret->ret==0){
				return array('ret'=>0,'_log'=>'');
			}else{
				return array('ret'=>-1,'_log'=>'短信发送失败');
			}
		}
	}
	
	/**
	 * 验证验证码是否有效
	 * $input_verifyi_code string
	 * 验证成功返回array('ret'=>0,'');失败返回array('ret'=>-1,'');
	 */
	public  function verify_code($input_verfi_code){
		return array('ret'=>0, '_log'=>'验证成功');
		
		if (ENVIRONMENT == 'development')
			return array('ret'=>0, '_log'=>'验证成功');
		
		@session_start();
		
		if(!isset($_SESSION[self::SESSION_EXPIR_TIME_NAME])){
			return array('ret'=>-1,'_log'=>'验证码失效');
		}
		else if( (time()-$_SESSION[self::SESSION_EXPIR_TIME_NAME])>self::SESSION_EXPIR_TIME){
			return array('ret'=>-1,'_log'=>'验证码过期');
		}
		
		else if  (isset($_SESSION[self::VER_SESSION_NAME]) && $_SESSION[self::VER_SESSION_NAME]==$input_verfi_code){
			unset($_SESSION[self::VER_SESSION_NAME]);
			unset($_SESSION[self::SESSION_EXPIR_TIME_NAME]);
			return array('ret'=>0,'_log'=>'验证成功');
		}
		
		return array('ret'=>-1,'_log'=>'验证失败');
	}
	
	/**
	 * 生成短消息，默认发送验证码
	 */
	private function gen_msg($tel,$msg_type){
		$msg = '';
		switch ( $msg_type ) {
			
			case self::TYPE_VERY_CODE:
			default:
				$msg = iconv('UTF-8','GBK','您的经销商平台验证码是['.$this->get_very_code().']');
				break;
		}
		
		return "{\"mobile\":\"$tel\",\"content\":\"$msg\"}";
	}
	
	/**
	 * 生成验证码，并且写入session
	 */
	private function get_very_code(){
		
		$ver_code='';
		for($i=0;$i<self::VER_CODE_LEN;$i++){
			$ver_code.=$this->gen_random();
		}
		$_SESSION[self::VER_SESSION_NAME] = ''.$ver_code;
		$_SESSION[self::SESSION_EXPIR_TIME_NAME] = time();
		return $ver_code;
	}
	/**
	 * 生成一个随机的数字，范围0-10
	 */
	private function gen_random(){
		return mt_rand(0, 9);
	}
}

