<?php

class DefautController extends Controller
{

	public function __construct(){
		parent::__construct();
	}

	public function defaut()
	{
		$this -> _view -> render();
	}

	

}

?>