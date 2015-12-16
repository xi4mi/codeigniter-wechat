<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PF_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
        $this->db = $this->load->database('promotion',true);
    }

    protected function _isset($key, $obj, $type = 'string'){
        switch($type){
            case 'number':
                return isset($obj->$key)?$obj->$key: 0;
            case 'string':
            default:
                return isset($obj->$key)?$obj->$key: '';
        } 
    }

	public function get_insert_id(){
		return $this->db->insert_id();
    }

    public function _each($search){
        foreach($search as $key=>$val){
            if(is_null($val))
                continue;
            if(is_array($val)){
                $this->db->where_in($key, $val);
            }
            else {
                $this->db->where($key, $val);
            }
        }
    }

    function create_guid()  
    {  
        $microTime = microtime();  
        list($a_dec, $a_sec) = explode(" ", $microTime);  
        $dec_hex = dechex($a_dec* 1000000);  
        $sec_hex = dechex($a_sec);  
        $this->ensure_length($dec_hex, 5);  
        $this->ensure_length($sec_hex, 6);  
        $guid = "";  
        $guid .= $dec_hex;  
        $guid .= $this->create_guid_section(3);  
        $guid .= '-';  
        $guid .= $this->create_guid_section(4);  
        $guid .= '-';  
        $guid .= $this->create_guid_section(4);  
        $guid .= '-';  
        $guid .= $this->create_guid_section(4);  
        $guid .= '-';  
        $guid .= $sec_hex;  
        $guid .= $this->create_guid_section(6);  
        return $guid;  
    }  

    function ensure_length(&$string, $length){  
        $strlen = strlen($string);  
        if($strlen < $length)  
        {  
            $string = str_pad($string,$length,"0");  
        }  
        else if($strlen > $length)  
        {  
            $string = substr($string, 0, $length);  
        } 
    }


    function create_guid_section($characters) {  
        $return = "";  
        for($i=0; $i<$characters; $i++)  {  
            $return .= dechex(mt_rand(0,15));  
        }  
        return $return;  
    }  

    function std_class_object_to_array($stdclassobject) {
        $_array = is_object($stdclassobject) ? get_object_vars($stdclassobject) : $stdclassobject;

        foreach ($_array as $key => $value) {
            $value = (is_array($value) || is_object($value)) ? std_class_object_to_array($value) : $value;
            $array[$key] = $value;
        }

        return $array;
    }
}
