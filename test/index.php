<?php
class User {
	private $_email;
	private $_password;
	private $_profile;

	public function __construct($email, $password, $profile){
		$this -> _email = $email;
		$this -> _password = $password;
		$this -> _profile = $profile;
	}


public function toJSON(){
		return'{"email":"'.$this->_email.'","password":"'.$this->_password.'","profile":"'.$this->_profile.'"}';
	}
}


	$u = new User('philippe.moudon@gmail.com','1234','admin');
	$a = $u ->toJSON();
	var_dump($a);

	$o=json_decode($a);

	var_dump($o);

	

?>	