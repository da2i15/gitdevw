<?php

class Database extends PDO {

	public function __construct(){
		//driver = mysql:host=127.0.0.1;dbname=mvc
		$dbpath = 'mysql:host=' . DB_HOST .';dbname=' . DB_NAME;
		parent::__construct(
			$dbpath,
			DB_USER,
			DB_PASS,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES ' . DB_CHARSET)
			);
	}
}
?>