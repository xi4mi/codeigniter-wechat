<?php 
if ( ! defined('BASEPATH')) 
    exit('No direct script access allowed');

class PF_Controller extends CI_Controller {

	const RET_NORMAL = 0;
	const RET_WRONG_INPUT   = 0x1;
	const RET_ERROR_DATA    = 0x2;
    const RET_ERROR_SYS     = 0x3;
    const RET_NOT_LOGIN     = 0x4;

	const DEBUG_NORMAL = 0;
	const DEBUG_INFO = 0x1;
	const DEBUG_WARN = 0x2;
    const DEBUG_ERROR = 0x3;

    const TYPE_NONE = 0;
    const TYPE_USER = 1;
    const TYPE_EMAIL    = 2;
    const TYPE_LINK = 3;
    const TYPE_APPSTORE = 4;
    const TYPE_IMAGE    = 5;
    const TYPE_VEDOI    = 6;
    const TYPE_TOPIC    = 7;
    const TYPE_NODE = 8;

	protected $_tpl = '';                	//output view file
	protected $_of = 'html';             //output format (html, json, xml, ...)
	protected $_ret = 0;                     //return code
	protected $_log = '';                     //log
    protected $_debug = array();			// debug log

    protected $id   = '';
    protected $uuid = '';
    protected $user = '';

    protected $_allow_access = array();

	function __construct($check_logon = TRUE){
        parent::__construct();
        $this->root = "";

		$this->load->helper('url');
		$this->load->helper('log');
		$this->user_log = Logger::factory(Logger::USER_LOG, 'rqq');
        $this->sys_log = Logger::factory(Logger::SYS_LOG, 'rqq');
        $this->read_params();

        $arr = $_REQUEST;
        $arr['server'] = $_SERVER;
	    $arr['cookie'] = $_COOKIE;
	    @$this->sys_log->log(new Meta_Sys_Log(array(
                'oper_type'=> $_SERVER['REQUEST_METHOD'],
                'data' => json_encode($arr)
        )));

        if(!$this->check_logon() and !$this->check_access()){
            $this->set_error(self::RET_NOT_LOGIN, 'session out');
            $this->_skip_method = true;
            return $this->output_data(array('data'=>array(), 'count'=>0));
        }
    }
    
    protected function check_access() {    	
    	if (in_array($this->router->method, $this->_allow_access)) {
    		return TRUE;
    	} else {
    		return FALSE;
    	}
    }
    
    protected function check_logon() {
        return true;
        if(isset($_SESSION['admin_id'])){
            $this->id   = $_SESSION['admin_id'];
            $this->username = $_SESSION['username'];
            return true;
        }
        return false;
    }


    protected function output_data ($data = array(), $view = '', $return = FALSE) {
        //TODO 删掉空值，修改数据库
		$output = null;
        //模版页
		if (!empty($view)) {
			$this->_tpl = $view;
		}

		if (!isset($data['_ret'])) {
			$data['_ret'] = $this->_ret;
		}

		if (!isset($data['_time'])) {
			$data['_time'] = time();
		}

		if (!isset($data['_log'])) {
			$data['_log'] = $this->_log;
        }
        @$data['_token'] = session_id();

		if (!isset($data['_debug']) and sizeof($this->_debug) > 0) {
			$data['_debug'] = $this->_debug;
        }

        if ($this->_of == 'json') {
			if ($return)
				$output = json_encode($data);
			else {
				$this->output->set_content_type ('application/json')->set_output(json_encode($data));
			}
		} else {
			 
			//	echo "$this->_tpl . '_' . $this->_of";
			$output = $this->load->view($this->_tpl . '_' . $this->_of, $data, $return);
        }
		return $output;
	}

	protected function set_error ($ret, $log = '') {
		$this->_ret = $ret;
		$this->_log = $log;
		$this->_tpl = 'error';
        //set_status_header($ret);

		if (isset($this->err_log)) {
            $this->err_log->log(new Meta_Sys_Log(array(
                    'oper_type'=> $_SERVER['REQUEST_METHOD'],
                    'data' => $log
                )));
        }
		return new Exception($log, $ret);
    }

    protected function check_input($data, $arr = null){
        foreach($data as $key=>$val){
            if(is_null($val)){
                $this->set_error(self::RET_WRONG_INPUT, $key." err");
                return true;
            }
        }
        return false;
    }

    protected function get($str, $type = 'normal', $default = null){
        $str = $this->input->get($str);
        $str = $this->valid($str, $type);
        if(is_null($str) and !is_null($default)){
            return $default;
        }
        return $str;
    }
    
    protected function post($str, $type = 'normal', $default = null){
        $str = $this->input->post($str);
        $str = $this->valid($str, $type);
        if(is_null($str) and !is_null($default)){
            return $default;
        }
        return $str;
    }

    protected function valid($str, $type){
        if (is_array($str)) {
            foreach ($str as $k=>$v)
                $str[$k] = $this->valid($v, $type);
            
            return $str;
        }
        
        $str = trim($str);
        
        switch ($type) {
            case 'alnum':
                return preg_match("/^[a-zA-Z0-9]+$/u",$str)? $str : NULL;
            case 'chinese':
                return preg_match("/^[\x{4e00}-\x{9fa5}A-Za-z0-9_]+$/u",$str)? $str : NULL;
            case 'integer':
                return preg_match("/^[0-9_]+$/u",$str)? $str : NULL;
            case 'number':
                return is_numeric($str)? $str : NULL;
            case 'money':
                $str = str_replace(',', '', $str);
                return is_numeric($str)? $str : NULL;
            case 'phone':
                return preg_match("/^[0-9-]+$/u",$str)? $str : NULL;
            case 'email':
                return filter_var($str, FILTER_VALIDATE_EMAIL)? $str : NULL;
            case 'float':
                return filter_var($str, FILTER_VALIDATE_FLOAT)? $str : NULL;
            case 'url':
                return filter_var($str, FILTER_VALIDATE_URL)? $str : NULL;
            case 'ip':
                return filter_var($str, FILTER_VALIDATE_IP)? $str : NULL;
            case 'normal':
            default:
                return preg_match("/^[^'\"<>]+$/u",$str)? $str : NULL;
        }
    }

	public function debug($data, $level = self::DEBUG_NORMAL) {
		$this->_debug[] = array('data'=>$data, 'level'=>$level);
    }

    protected function _post($url, $post_data){
        $post_data = implode('&',$post_data);  
      
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_POST, 1);  
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);  
        ob_start();  
        curl_exec($ch);  
        $result = ob_get_contents() ;  
        ob_end_clean();

        return $result;
    }
	 
	/*************** private functions *************/
	private function read_params () {
		$of = $this->input->get_post('of');
		$tpl = $this->input->get_post('tpl');
		if ($of)
			switch (strtolower(trim($of))) {
				case 'json':
					$this->_of = 'json';
					break;
				case 'xml':
					$this->_of = 'xml';
					break;
				case 'html':
					$this->_of = 'html';
					break;
				default:
					if ($this->input->is_ajax_request())
						$this->_of = 'json';
					else
						$this->_of = 'html';
					break;
		}
			
		if ($tpl)
			$this->_tpl = strtolower(trim($tpl));
		else
			$this->_tpl = load_class('Router')->fetch_directory() . load_class('Router')->fetch_method();
	}
}

