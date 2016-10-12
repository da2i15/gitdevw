<?php

class Launcher
{
	public static function run(Request $r)
	{
		//on a une url traitée et on connait 
		//le nom du controller
		//la méthode à appeler
		//les arguments s'il y a lieu

		//charger le fichier correspondant au controller

		$controllerName = $r->getController().'Controller';
		$controllerName= ucfirst($controllerName);
		$methodName = $r->getMethod();
		$argument = $r->getArgument();
		


		$controllerPath = ROOT.'controllers'.DS.$controllerName.'.php';

		if(is_readable($controllerPath)){
			require_once $controllerPath;
			$controller = new $controllerName();
			if(is_callable(array($controller, $methodName))){
				$method = $methodName;
			}else{
				$method = DEFAULT_METHOD;
			}
			
			if(isset($argument)){
				call_user_func_array(array($controller, $method), $argument);
			}else{
				call_user_func($controller, $method);
			}
			
		}else{
			throw new Exception('Controller '.$r->getController().' not found. ',2001);
		}
		
		
		
		
	}
}

?>