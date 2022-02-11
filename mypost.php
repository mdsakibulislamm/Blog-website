<?php 
session_start();
include_once 'core/mypost.php';
$post= new posts();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}


?>
<?php include_once './templetes/header_.php'; ?>
<body>
    <!---Header Start -->
    <?php include_once './templetes/header.php'; ?>
    <!---Header end -->
    <!-- Page content -->
  <!-- Post Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
            <?php 
            if(isset($_POST['submit'])){
                $post->postData($_POST['title'],$_POST['details'],$_SESSION['user_id'] );
            }

             ?>
            <form action="#" method="POST" class="form-group">
                <input type="text" name="title" placeholder="Title"><br>
                <textarea class="form-control" id="postData" name="details"></textarea>
                <br>
               <input action="index.php" class="btn btn-success"type="submit" name="submit" value= "Post"> 
            </form>       
            </div>
        </section>



<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#postData'
      });
</script>
     <!---Footer start --->
    <?php include_once("./templetes/footer.php"); ?>
    <!---Footer end --->

</body>
</html>

