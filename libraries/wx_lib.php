<?php
require_once __DIR__ . '/wechat/wechat.class.php';

class wx_lib {
    function __construct() {
        $CI = &get_instance();
    }

    public function obj() {

        $options = array(
            'token'=>'qiupsdashen', //填写你设定的key
            'encodingaeskey'=>'bjzobO3LqrfyBtSpapkfcSHoC3RZBc7Z8jXAxKJ0Dxs' ,
            //填写加密用的EncodingAESKey，如接口为明文模式可忽略
 			'appid'=>'wxb9a4c5bb9a596a44', //填写高级调用功能的app id
 			'appsecret'=>'ed16957d3d176518f1602f1ccdd2da5f' //填写高级调用功能的密钥
        );
        return new Wechat($options);
    }
}

?>
