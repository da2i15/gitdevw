<?php

abstract class Controller
{
	abstract public function defaut();
	protected $_view;
	public function __construct(){
		$this -> _view = new View(new Request);
	}


	protected function loadModel ($modelShortName){
		$modelName = ucfirst(strtolower($modelShortName));
		$modelPath = ROOT . 'models' . DS . $modelName . '.php';
		if (is_readable($modelPath)){
			require_once $modelPath;
			$model = new $modelName;
			return $model;
		}else{
			throw new Exception('Model ' . $modelShortName . ' not found.' , 2002);
			
			}
		}


	protected function getPostText($value) {
		if(isset($_POST[$value]) && !empty($_POST[$value])){
			$ret = htmlspecialchars($_POST[$value], ENT_QUOTES);
			return $ret;
		} else {
			return '';
		}
	}

	protected function getPostInt($key) {
		if(isset($_POST[$key]) && !empty($_POST[$key])){
			$ret = filter_input(INPUT_POST, $key, FILTER_VALIDATE_INT);
			return $ret;
		} else {
			return 0;
		}
	}
	




	protected function redirect($route = false){
		if($route){
			header('location:' . BASE_URL . $route);
		}else{
			header('location:' . BASE_URL);
		}
	}


}


?>