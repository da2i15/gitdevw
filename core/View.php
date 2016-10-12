<?php
require_once ROOT . 'vendor' . DS . 'smarty' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty {
	private $_controller;

	public function __construct(Request $demand) {
		parent::__construct();
		$this->_controller = $demand -> getController();
	}

	public function render($viewName = DEFAULT_VIEW, $layoutName = DEFAULT_LAYOUT){
		$this -> template_dir = ROOT . 'views' . DS . 'layout' . DS . $layoutName . DS;
		$this -> config_dir = ROOT . 'views' . DS . 'layout' . DS . $layoutName . DS . 'configs' . DS;
		$this -> cache_dir = ROOT . 'tmp' . DS . 'cache' . DS;
		$this -> compile_dir = ROOT . 'tmp' . DS . 'templates' . DS;

		$parameters = array(
			'css_path' => BASE_URL . 'public/css/',
			'js_path' => BASE_URL . 'public/js/',
			'root' => BASE_URL,
			'config' => array(
				'app_name' => APP_NAME,
				'app_slogan' => APP_SLOGAN,
				'app_society' => APP_SOCIETY
				)
		);

		$viewPath = ROOT . 'views' . DS . strtolower($this -> _controller) . DS . $viewName . '.tpl';

		echo $viewPath;

		if(is_readable($viewPath)){
			$this -> assign('_content', $viewPath);
			}else{
				throw new Exception('View' . $viewName . ' not found.', 2002);
				
			}

		$this -> assign('_parameters', $parameters);
		$this -> display('template.tpl');
		
	}
}