<?php
ini_set('display_errors',1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('CORE_PATH', ROOT.'core'.DS);


try{
require_once CORE_PATH.'Session.php';
require_once CORE_PATH.'config.php';
require_once CORE_PATH.'Launcher.php';
require_once CORE_PATH.'Controller.php';
require_once CORE_PATH.'Log.php';
require_once CORE_PATH.'Model.php';
require_once CORE_PATH.'Request.php';
require_once CORE_PATH.'View.php';
require_once CORE_PATH. 'Database.php';

session::init();


//$r = new Request();
//echo $r->getController().'<br>';
//echo $r->getMethod().'<br>';
//var_dump($r->getArgument());

Launcher::run(new Request());
}catch (Exception $e){
	if(DEBUG){
		echo $e->getMessage();
	}else{
		header('Location: '.BASE_URL. 'erreur/e'.$e->getCode());
	}
}
?>