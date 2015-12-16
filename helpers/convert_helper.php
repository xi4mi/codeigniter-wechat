<?php
class Convert{
    /**
     * 格式化价格：四舍五入，保留三位小数
     * @param $price
     * @param $show_prefix 是否显示前缀
     * @return float|string
     */
    public static function price_format($price,$show_prefix = FALSE,$decimal_point=3, $thousands_sep = ','){
    	$price = str_replace(',', '', $price);
    	
    	if (!is_numeric($price)) {
    		return '获取价格失败';
    	}
          $rs = number_format($price, $decimal_point, ".", $thousands_sep);
        if($show_prefix==TRUE){
              $rs = "￥".$rs;
        }
         return $rs;
    }
    
    static function format_number($number,$decimal_point=2){
    	return number_format($number, $decimal_point, ".", ',');
    }
    
    static function convert2star ($str, $start = NULL, $length = NULL) {
    	$length = ($length==NULL)? ceil(strlen($str)/2) : $length;
    	$start = ($start==NULL)? ceil($length/2) : $start;
    
    	return substr_replace($str, str_repeat('*',$length), $start , $length);
    }

    //marginyu
    //时间格式化：将秒转化为时分秒格式
    public static function time_format($seconds){
        $second = $seconds % 60;
        $minutes = $seconds / 60;

        $minute = $minutes % 60;
        $hours = $minutes / 60;

        $hour = $hours % 60;
        $rs = '';
        if($hour != 0){
           $rs =  $hour.'小时';
        }
        if($minute!=0){
            $rs =  $rs.$minute.'分钟';
        }
        if($second!=0){
           $rs = $rs.$second.'秒';
        }
        return  $rs;
    }
}