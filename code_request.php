<?php

if(isset($_GET['url'])){
	$url = $_GET['url'];
}else{
	//controller et méthode par défaut
	//sans argument
	$url = 'default/default';
}



$item = explode('/',$url);
//var_dump($item) ;
$controller = array_shift($item);
if (count($item)!=0){
$method = array_shift($item);
}else{
	$method = 'default';
}
$argument = $item;

var_dump ($controller);
var_dump($method);
var_dump($argument);


?>