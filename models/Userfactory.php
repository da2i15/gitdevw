<?php


//besoin de User
require_once ROOT . 'models' . DS . 'User.php';

class UserFactory extends Model {
	
	/*public function create($email, $password, $profile){
		return new User(new Uservalue($email, $password, $profile));
	}*/
	
	
	public function getAdminUsers(){
		/*///écrire la requete
		$sql = 'SELECT email, password, profile FROM user WHERE profile="admin";';
		//éxecuter la requete
		$data=$this->_db->query($sql);
		//reourner toutes les réponses
		return $data->fetchall(PDO::FETCH_CLASS,"Uservalue");
		*/

		//requète
	$sql= 'SELECT email,password,profile ';
	$sql.= 'FROM user ';
	$sql.= 'WHERE profile="admin";';

	//préparation du statement
	$stmt = $this->_db->prepare($sql);
	//execution
	$stmt->execute();

	//$data est un tableau qui contient 1 seul élément
	$data = $stmt->fetchall(PDO::FETCH_CLASS,"Uservalue");
	
	return $data;	


	}

	public function getUsers(){
	/*	$sql = 'SELECT email, password, profile FROM user;';
		$data = $this->_db->query($sql);
		return $data->fetchall(PDO::FETCH_CLASS,"Uservalue");
	*/

	//requète
	$sql= 'SELECT email,password,profile ';
	$sql.= 'FROM user;';

	//préparation du statement
	$stmt = $this->_db->prepare($sql);
	//execution
	$stmt->execute();

	//$data est un tableau qui contient 1 seul élément
	$data = $stmt->fetchall(PDO::FETCH_CLASS,"Uservalue");
	
	return $data;	


	}

	public function getByEmail($email){
		/*$sql = 'SELECT email, password, profile FROM user WHERE email ="'.$email.'";';
		$data = $this->_db->query($sql);
		return $data->fetchall(PDO::FETCH_CLASS,"Uservalue")[0];*/
	//requète
		$sql= 'SELECT email,password,profile ';
		$sql.= 'FROM user ';
		$sql.= 'WHERE email = ?;';
	//préparation du statement
	$stmt = $this->_db->prepare($sql);
	//liaison avec les arguments
	$stmt->bindParam(1,$email,PDO::PARAM_STR);
	//execution
	$stmt->execute();
	//$data est un tableau qui contient 1 seul élément
	$data = $stmt->fetchall(PDO::FETCH_CLASS,"Uservalue");
	
	//on récupère le seul élément
	$user=$data[0];
	return $user;

	}

	public function delete($email){
		/*$sql = 'DELETE FROM user WHERE email ="'.$email.'";';
		$this->_db->query($sql);. */

		$sql= 'DELETE FROM user ';
		$sql.= 'WHERE email = ?;';

	//préparation du statement
	$stmt = $this->_db->prepare($sql);
	//liaison avec les arguments
	$stmt->bindParam(1,$email,PDO::PARAM_STR);
	//execution
	$stmt->execute();


	}

	public function create($email,$password,$profile){
		/*$sql = 'INSERT INTO user(email,password,profile) VALUES ("';
		$sql.= $email.'","'.$password.'","'.$profile.'");';
		$this->_db->query($sql);*/

		$sql= 'INSERT INTO user(email,password,profile) ';
		$sql.= 'VALUES(?,?,?) ;';

	//préparation du statement
	$stmt = $this->_db->prepare($sql);
	//liaison avec les arguments
	$stmt->bindParam(1,$email,PDO::PARAM_STR);
	$stmt->bindParam(2,md5($password),PDO::PARAM_STR);
	$stmt->bindParam(3,$profile,PDO::PARAM_STR);
	//execution
	$stmt->execute();
		
	}

	public function update($email,$password,$profile,$oldemail){
		/*$sql = 'INSERT INTO user(email,password,profile) VALUES ("';
		$sql.= $email.'","'.$password.'","'.$profile.'");';
		$this->_db->query($sql);*/

		$sql= 'UPDATE user ';
		$sql.= 'SET email = ?, password = ?, profile = ? ';
		$sql.= 'WHERE email = ?';
		

	//préparation du statement
	$stmt = $this->_db->prepare($sql);
	//liaison avec les arguments
	$stmt->bindParam(1,$email,PDO::PARAM_STR);
	$stmt->bindParam(2,md5($password),PDO::PARAM_STR);
	$stmt->bindParam(3,$profile,PDO::PARAM_STR);
	$stmt->bindParam(4,$oldemail,PDO::PARAM_STR);
	//execution
	$stmt->execute();
		
	}

	public function authentify($email,$password){
		/*$sql = 'INSERT INTO user(email,password,profile) VALUES ("';
		$sql.= $email.'","'.$password.'","'.$profile.'");';
		$this->_db->query($sql);*/

		$sql= 'SELECT profile ';
		$sql.= 'FROM user ';
		$sql.= 'WHERE email = ? AND password = ?;';
		

		//préparation du statement
		$stmt = $this->_db->prepare($sql);
		//liaison avec les arguments
		$stmt->bindParam(1,$email,PDO::PARAM_STR);
		$stmt->bindParam(2,md5($password),PDO::PARAM_STR);

		//execution
		$stmt->execute();
		//$data est un tableau qui contient 1 seul élément
		$data = $stmt->fetchall(PDO::FETCH_CLASS,"Uservalue");
	
		if(count($data)>0){
		return true;
		} else{
			return false;
		}
		
	}


}



