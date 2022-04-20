<?php 
include 'database.php';
class posts extends database{

    public function postData($title,$details,$user_id)
    {
        $query= "INSERT INTO posts (title,details,user_id) VALUES ('$title','$details','$user_id')";
        $this->dataWrite($query);


    }

}

 ?>