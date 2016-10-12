<?php
class Session {

	public static function init(){
		session_start();
	}

	public static function revoke(){
		session_destroy();
	}

	public static function set($key,$value){
		if(!empty($key))
			$_SESSION[$key] = $value;
	}

	public static function get($key){
		if(isset($_SESSION[$key]))
			return $_SESSION[$key];
	}

}

