<?php 
include_once 'core/user.php';
$user= new user();
?>

<?php include_once './templetes/header_.php'; ?>
<body>
     <!-- Regester Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-info mb-0">LOGIN</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <?php 
                        if (isset($_POST['submit']))
                        {
                            $result= $user->login($_POST['username'],$_POST['password'] );
                            if(count($result)==1){
                                session_start();
                                $_SESSION['user_id']=$result[0]['id'];
                                  $_SESSION['username']=$result[0]['username'];
                                  header("location: index.php");


                            }else{
                                echo "<p class='alert alert-danger'> Invalid Credentials </p> ";
                            }

                        } 

                         ?>
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="" method="POST">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>User name</label><input class="form-control" id="name" type="text" placeholder="user name" required="required" data-validation-required-message="Please enter your name." name="username" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>                      
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Password</label><input class="form-control" id="phone" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password." name="password" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-lg" id="sendMessageButton" type="submit" name="submit">Submit</button></div>
                            <p>Not regester yet? Click here for
                                <a href="Regester.php">REGESTER</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>




