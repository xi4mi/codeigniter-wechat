<?php
class VC {
	
	const VERIFY_HOST = '10.151.22.178';
	const VERIFY_PORT = 35353;
	const VERIFY_APPID = 9000301;

    /**
     * 调用后台接口
     * @param PBMessage $pb_obj
     * @param PBMessage $ret_obj
     * @return bool
     */
    static public function verify ($validated_code)	{
    	if (ENVIRONMENT == 'development')
			return true;

		pt_php_vc_init(self::VERIFY_HOST);
		return $res = pt_php_vc_verify(
				$validated_code,
				self::VERIFY_APPID,
				$_COOKIE["verifysession"],
				$_SERVER["REMOTE_ADDR"]
		);
	}
	
}
