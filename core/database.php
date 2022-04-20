<?php 
class database{

	public $conn ;
	public function __construct(){
		$servername = "localhost";
		$username = "root";
		$password = "";


  $connection = new PDO("mysql:host=$servername;dbname=blog", $username, $password);
  $this-> conn= $connection;
  
}
public function dataWrite($sql)
{

$statement= $this-> conn-> prepare($sql);
$statement->execute();
}
public function dataFetch($sql)
{

$statement= $this-> conn-> prepare($sql);
$statement->execute();
return $statement->fetchAll();
}


}

?>
