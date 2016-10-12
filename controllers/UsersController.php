<?php

class UsersController extends Controller{

		public function __construct(){
				parent::__construct();
		}

		public function defaut(){
			if(Session::get('authenticated'))
				$this -> _view -> render();
			else
				throw new Exception("Non accessible", 2004);
				

		}

		public function showadminusers(){
			if(Session::get('authenticated')){

				$m = $this -> loadModel('Userfactory');
				//$usersName = $m->getUsersEmail();
				$usersData = $m->getAdminUsers();
				$this -> _view -> assign('users', $usersData);
				$this -> _view -> render('show'); // show.tpl

			} else
				throw new Exception("Non accessible", 2004);
		}


		public function showusers(){
			if(Session::get('authenticated')){

				$m = $this -> loadModel('Userfactory');
				//$usersName = $m->getUsersEmail();
				$usersData = $m->getUsers();
				$this -> _view -> assign('users', $usersData);
				$this -> _view -> render('show'); // show.tpl

			} else
				throw new Exception("Non accessible", 2004);
		}

		public function create(){
			if(Session::get('authenticated')){

				$this -> _view -> render('create'); //create.tpl

			} else
				throw new Exception("Non accessible", 2004);
		}

		public function createpost(){

			if(Session::get('authenticated')){

				$m = $this->loadModel('Userfactory');
				$m->create(
					$this->getPostText ('email'), 
					$this->getPostText ('pwd'),
					$this->getPostText ('profile')
				);

				$this->redirect('/users/showusers');

			} else
				throw new Exception("Non accessible", 2004);

		}


		public function updatepost(){

			if(Session::get('authenticated')){

				$m = $this->loadModel('Userfactory');
				$m->update(
					$this->getPostText ('email'), 
					$this->getPostText ('pwd'),
					$this->getPostText ('profile'),
					$this->getPostText ('oldemail')
				);
				$this->redirect('/users/showusers');

			} else
				throw new Exception("Non accessible", 2004);

			
		}




		public function delete($email){

			if(Session::get('authenticated')){

				echo 'suppression de cet email : '.$email;
				$m = $this -> loadModel('Userfactory');
				$m->delete($email);
				$this -> redirect('/users/showusers');
			} else
				throw new Exception("Non accessible", 2004);
		}



		public function update($email){

			if(Session::get('authenticated')){

				//echo 'mis à jour de cet email : '.$email;
				$m = $this -> loadModel('Userfactory');
				$usersData = $m->getByEmail($email);
				$this -> _view -> assign('users', $usersData);
				$this -> _view -> render('update');
			} else
				throw new Exception("Non accessible", 2004);

		}


		
}

?>