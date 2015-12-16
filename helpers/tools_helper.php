<?php
class Tools {

	static function convert2star ($str, $start = NULL, $length = NULL) {
		$length = ($length==NULL)? ceil(strlen($str)/2) : $length;
		$start = ($start==NULL)? ceil($length/2) : $start;
		
		return substr_replace($str, str_repeat('*',$length), $start , $length);
	}
	
	
}
