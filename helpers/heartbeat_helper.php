<?php
class Heartbeat_helper {
	const DB_PLATFORM_SALES = 1;
	const DB_PLATFORM_TSUP = 2;
	
	const TIMEOUT = 2;
	const EXPIRED_TIME = 900; //15分钟
	
	static $ins; //单例
	private $r;
	
	public static function init($db = 1) {
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
	
	/**
	 * 获取最近在线时间
	 * @input $id 账户ID
	 * @input $key 用户登录唯一标识（建议使用session_id），默认匹配任意用户
	 */
	public function last_ontime ($id, $key = '') {
		if (!isset($this->r)) {
			return NULL;
		}
		
		$val = $this->r->get($id);
		if (false == $val || false === strstr($val, '|'. $key)) {
			$val = 0;
		}
		
		return strstr($val, '|'.$key, TRUE);
	}
	
	/**
	 * 心跳包操作
	 * @input $id 账户ID
	 * @input $key 用户登录唯一标识（建议使用session_id）
	 */
	public function hello($id, $key) {
		if (!isset($this->r)) {
			return;
		}
		
		$this->r->setex($id, self::EXPIRED_TIME, $_SERVER['REQUEST_TIME'].'|'.$key);
	}
	
	/**
	 * 退出登录
	 * @input $id 账户ID
	 */
	public function logout ($id) {
		if (!isset($this->r)) {
			return;
		}
		
		$this->r->del($id);
	}
}