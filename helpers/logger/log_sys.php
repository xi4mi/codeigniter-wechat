<?php

class Meta_Sys_Log extends Meta_Log {
	
	const OPER_TYPE_NORMAL = 0;	//其他
		
	public $dealer_id;
	public $user_id;
	public $ip;
	public $oper_type;
	public $data;
	public $ctime;
	
	public function __toString() {
		return $this->oper_type . '|' .
				$this->ctime . '|' .
				$this->dealer_id . '|' .
				$this->user_id . '|' .
				$this->ip . '|' .
				$this->data . "\n"
		;
	}
}

class Log_sys_builder extends Log_builder{
	
	public $dealer_id = 0;
	public $user_id = 0;
	
	public function build($obj_log){
		if (empty($obj_log->dealer_id)) $obj_log->dealer_id = $this->dealer_id;
		if (empty($obj_log->user_id)) $obj_log->user_id = $this->user_id;
		if (empty($obj_log->oper_type)) $obj_log->oper_type = Meta_Sys_Log::OPER_TYPE_NORMAL;
		if (empty($obj_log->ip)) $obj_log->ip = get_instance()->input->ip_address();
		if (empty($obj_log->data)) $obj_log->data = '';
		if (empty($obj_log->ctime)) $obj_log->ctime = date('YmdHis', $_SERVER['REQUEST_TIME']);
		return $obj_log;                                       
	}

}

class Log_sys_saver extends Log_saver{

	const LOG_PATH = '/data/logs/'; //web服务器（或者是nfs）上面的log路径
	
	public function save($obj_log, $platform){
        $filename = $this->get_file_name(self::LOG_PATH . $platform . '/sys_' . date('Ymd') . '.log');
	
		$fp = $this->open_file($filename);
		if (!$fp) {
			return false;
		}

		fwrite($fp, $obj_log, self::LOG_MAX_LENGTH);
		$this->close_file($fp);
		
		return true;
	}
	
}

class Log_error_saver extends Log_saver{

	const LOG_PATH = '/data/logs/'; //web服务器（或者是nfs）上面的log路径

	public function save($obj_log, $platform){
		$filename = $this->get_file_name(self::LOG_PATH . $platform . '/err_' . date('Ymd') . '.log');
	
		$fp = $this->open_file($filename);
		if (!$fp) {
			return false;
		}
	
		fwrite($fp, $obj_log, self::LOG_MAX_LENGTH);
		$this->close_file($fp);
	
		return true;
	}

}

class Log_buy_saver extends Log_saver{
    const LOG_PATH = '/data/logs/'; //web服务器（或者是nfs）上面的log路径

    public function save($obj_log, $platform){
        $filename = $this->get_file_name(self::LOG_PATH . $platform  .'/buy_' . date('Ymd') . '.log');

        $fp = $this->open_file($filename);
        if (!$fp) {
            return false;
        }
        fwrite($fp, $obj_log, self::LOG_MAX_LENGTH);
        $this->close_file($fp);
        return true;
    }
}

class Log_sys_parser extends Log_parser {
	public function parse($log) {
		return $log;
	}
}
