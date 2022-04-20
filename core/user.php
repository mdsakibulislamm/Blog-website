<?php 
include 'database.php';
class user extends database{
	// REFESTER

	public function register($username,$password)
	{
		$password= md5($password);
		$query= "INSERT INTO users (username,password) VALUES ('$username','$password')";
		$this->dataWrite($query);


	}
	//LOGIN
	public function login($username, $password)
	{ 
		$password= md5($password);
		$query="SELECT * FROM users where username='$username' and password='$password'";
		$result = $this->dataFetch($query);
		return $result;



	}

}

 ?>