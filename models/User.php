<?php

//besoin de UserValue

require_once ROOT . 'models' . DS . 'Uservalue.php';

class User {
	private $_value;

	public function __construct(UserValue $value){
		$this->_value = $value;
	}
	
	public function getEmail(){
		return $this->_value->email;
	}

	public function getPassword(){
		return $this->_value->password;
	}

	public function getProfile(){
		return $this->_value->profile;
	}
	
	public function toJSON(){
		return json_encode($this->_value);
	}
}