<?php 
session_start();
include_once 'core/user.php';
$user= new user();

if(!isset($_SESSION['user_id'])){
	header("location: login.php");
}

?>
<?php 
require_once('templetes/header_.php') ?>
<body>
	<!---Header Start -->
	<?php include_once './templetes/header.php'; ?>
	<!---Header end -->
	<section>
		 <div class="container mt-5">
            <a href="mypost.php" class="btn btn-outline-dark"> +Create a new post</a>
            </div>
            <div class="container mt-5">
            <input action="#" class="btn btn-success"type="submit" name="submit" value= "Edit">
            <input action="#" class="btn btn-success"type="submit" name="submit" value= "Delete">
            </div>
	</section>
	<br><br><br>
	       
	



</body>
</html>


