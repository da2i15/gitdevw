<?php
class Request
{
	private $_controller;
	private $_method;
	private $_argument;

	public function __construct(){
		if(isset($_GET['url'])){
			$url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$url_exp = explode('/', $url);
			$url_parts = array_filter($url_exp);
		}else{
			//controller et méthode par défaut
			//sans argument
			$url_parts = array();
		}
	
		$this->_controller = ucfirst(strtolower(array_shift($url_parts)));
		$this->_method = strtolower(array_shift($url_parts));
		$this->_argument = $url_parts;

		if(!$this-> _controller){
			$this-> _controller = DEFAULT_CONTROLLER;
		}

		if(!$this-> _method){
			$this-> _method = DEFAULT_METHOD;
		}

		if(!$this-> _argument){
			$this-> _argument = array();
		} 

	}

	public function getController(){
		return $this->_controller;
	}

	public function getMethod(){
		return $this->_method;
	}

	public function getArgument(){
		return $this->_argument;
	}
}

?>