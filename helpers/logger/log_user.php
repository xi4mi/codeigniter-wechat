<?php

class Meta_User_Log extends Meta_Log {

	const OPER_TYPE_OTHERS = 0;	//其他
	const OPER_TYPE_LOGON = 0x1; //账户登录
	const OPER_TYPE_LOGOUT = 0x2; //账户登出
	const OPER_TYPE_REGIETE = 0x3; //用户注册
	const OPER_TYPE_PRODUCT = 0x4; //更新商品
	
	// 财务、权限、帐号、安全、销售
	const OPER_TYPE_FINANCE = 0x5;
	const OPER_TYPE_PERMISSON = 0x6;
	const OPER_TYPE_ACCOUNT = 0x7;
	const OPER_TYPE_SALE = 0x8;
	const OPER_TYPE_DEMAND = 0x9;//进货
	const OPER_TYPE_SUPPLY = 0xA;//供货
	
	static $oper_type_name = array(
		0 => '其他',
		0x1 => '登录',		
		0x2 => '注销',
		0x3 => '注册',
		0x4 => '更新商品',
		0x5 => '财务',
		0x6 => '权限',
		0x7 => '安全',
		0x8 => '销售',
		0x9 => '进货',
		0xA => '供货',
	);
	
	public $log_id;
	public $dealer_id;
	public $user_id;
	public $ip;
	public $oper_type;
	public $data;
	public $ctime;
}

class Log_user_builder extends Log_builder{

	public $dealer_id = 0;
	public $user_id = 0;
	
	public function build($obj_log){
		if (empty($obj_log->dealer_id)) $obj_log->dealer_id = $this->dealer_id;
		if (empty($obj_log->user_id)) $obj_log->user_id = $this->user_id;
		if (empty($obj_log->oper_type)) $obj_log->oper_type = Meta_User_Log::OPER_TYPE_OTHERS;
		if (empty($obj_log->ip)) $obj_log->ip = get_instance()->input->ip_address();
		if (empty($obj_log->data)) $obj_log->data = '';
		if (empty($obj_log->ctime)) $obj_log->ctime = date('YmdHis');
		return $obj_log;                                      
	}

}

class Log_user_saver extends Log_saver{

	public function save($obj_log, $platform){
		$CI = &get_instance();
		if (!isset($CI)) {
			return FALSE;
		}
		
		if (!isset($this->db)) {
			$this->db = $CI->load->database($platform . '_log', TRUE);
		}
		
		return $this->db->insert(self::get_table ($obj_log->dealer_id), $obj_log);
	}
	
	static public function get_table ($dealer_id) {
		return 't_log_' . $dealer_id % 100;
	}

}

class Log_user_parser extends Log_parser {
	
	public function parse($log) {
		return $log;
	}
}
