<?php

class Mcrypt_helper
{
	const MCRYPT_ALGORITHM = MCRYPT_3DES;
	const MCRYPT_MODE = MCRYPT_MODE_ECB;
	
	public static function encrypt($data, $key) {
		if (is_object($data) or is_array($data)) $data = json_encode($data);
		$data = self::PaddingPKCS7($data);
		
		$cipher = mcrypt_module_open (self::MCRYPT_ALGORITHM, '', self::MCRYPT_MODE, '');
		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($cipher), MCRYPT_DEV_URANDOM);
		mcrypt_generic_init($cipher, $key, $iv);
		$res = self::base64url_encode(mcrypt_generic($cipher, $data));
		
		mcrypt_generic_deinit($cipher);
		mcrypt_module_close($cipher);
		
		return $res;
	}
	
	public static function hash($data,$salt='') {
		return md5(json_encode($data).$salt);
	}
	
	public static function decrypt ($data, $key) {
		$data = self::base64url_decode($data);

		$cipher = mcrypt_module_open (self::MCRYPT_ALGORITHM, '', self::MCRYPT_MODE, '');
		$iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($cipher), MCRYPT_DEV_URANDOM);
		mcrypt_generic_init($cipher, $key, $iv);
		$res = trim(mdecrypt_generic($cipher, $data));
		$res = self::UnPaddingPKCS7($res);
		$res = in_array($res[0], array('{','['))? json_decode($res) : $res;
		
		mcrypt_generic_deinit($cipher);
		mcrypt_module_close($cipher);
		
		return $res;
	}
	
	private static function PaddingPKCS7($data) {
		$block_size = mcrypt_get_block_size(MCRYPT_3DES, MCRYPT_MODE_CBC);
		$padding_char = $block_size - (strlen($data) % $block_size);
		$data .= str_repeat(chr($padding_char),$padding_char);
		return $data;
	}
	
	private static function UnPaddingPKCS7($data) {
		$pad = ord($data{strlen($data) - 1});
		if ($pad > strlen($data)) {
			return false;
		}
		if (strspn($data, chr($pad), strlen($data) - $pad) != $pad) {
			return false;
		}
		return substr($data, 0, -1 * $pad);
	}
	
	private static function base64url_encode($data) {
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}
	
	private static function base64url_decode($data) {
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	}

}
