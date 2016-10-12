<?php

class LoginController extends Controller
{

	public function __construct(){
		parent::__construct();
	}

public function defaut()
	{
		$this -> _view -> render();
	}


	public function connect()
	{
		$m = $this->loadModel('Userfactory');
		
		$test=	$m->authentify(
				$this->getPostText ('email'), 
				$this->getPostText ('pwd')
				);
		
		if ($test == true){
			
			Session::set('authenticated',true);
			$this -> redirect();

		} else {
			$this -> redirect('/login');

		}

	//si c'est bon
		
	}

	public function disconnect()
	{
		Session::revoke ();
		$this -> redirect();
	}

	

}

?>