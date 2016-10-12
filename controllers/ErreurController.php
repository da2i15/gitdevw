<?php

class ErreurController extends Controller
{

	public function __construct(){
		parent::__construct();
	}

	public function defaut()
	{
		$this -> _view -> render();
	}

	public function e2001()
	{

		$this -> _view -> assign('message','erreur de Controller');
		$this -> _view -> render();
	}

	public function e2002()
	{
		$this -> _view -> assign('message','erreur de vue');
		$this -> _view -> render();
	}

	public function e2003()
	{
		$this -> _view -> assign('message','erreur de modele');
		$this -> _view -> render();
	}

	public function e2004()
	{
		$this -> _view -> assign('message','erreur d\'acces');
		$this -> _view -> render();
	}

	
}

?>