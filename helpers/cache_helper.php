<?php
class Cache_helper {
	const DB_PLATFORM_SALES = 1;
	const DB_PLATFORM_TSUP = 2;
	
	const TIMEOUT = 2;
	const EXPIRED_TIME = 10; //10秒
	
	static $ins; //单例
	private $r;
	
	public static function init($db = 2) {
		if (!isset(self::$ins)) {
			self::$ins = new self($db);
		}
		return self::$ins;
	}
	
	private function __construct($db) {
		if (!class_exists('Redis')) {
			return;
		}
		
		$CI = &get_instance();
		$CI->config->load('cache');
		
		$this->r = new Redis();
		if (FALSE == @$this->r->pconnect($CI->config->item('cache_master_ip'), $CI->config->item('cache_master_port'), self::TIMEOUT)) {
			if (FALSE == @$this->r->pconnect($CI->config->item('cache_slave_ip'), $CI->config->item('cache_slave_port'), self::TIMEOUT)) {
				$this->r = NULL;
				return;
			} else {
				$this->r->auth($CI->config->item('cache_slave_auth'));
			}
		} else {
			$this->r->auth($CI->config->item('cache_master_auth'));
		}
		
		$this->r->select($db);
		//$this->r->setOption(Redis::OPT_SERIALIZER, Redis::SERIALIZER_IGBINARY);
	}
	
	public function get ($key) {
		if (!isset($this->r)) {
			return NULL;
		}
		
		$val = $this->r->get($key);
		if (false == $val) {
			$val = '';
		}
		
		return $val;
	}

	public function set($key, $val) {
		if (!isset($this->r)) {
			return;
		}
		
		$this->r->setex($key, self::EXPIRED_TIME,  $val);
	}

	public function del ($key) {
		if (!isset($this->r)) {
			return;
		}
		
		$this->r->del($key);
	}
	
	public function only_one_set($key,$val){
		if (!isset($this->r)) {
			return NULL;
		}
		
		$res = $this->r->setnx($key,$val);
		if ($res) {
			$this->r->setex($key, 60,  $val);
			return $val;
		} else {
			return $this->r->get($key);
			
		}
	}
}