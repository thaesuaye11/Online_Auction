<?php
 session_start();
 if(isset($_SESSION["user"])){
     header("Location: profile.php");
    }
?>
<?php
require('header.php');
require('nav.php');
require('hero-section.php');
?>

 <!--============= Account Section Starts Here =============-->
 <section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                    <h2 class="title">HI, THERE</h2>
                    <p>You can log in to your Sbidu account here.</p>
                </div>


<?php
   if (isset($_POST["login"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];
       require_once "Database.php";
       $sql = "SELECT * FROM users WHERE email = '$email' ";
       $result = mysqli_query($conn, $sql);
       $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
       if ($user) {
           if (password_verify($password, $user["password"])) {
            $_SESSION["user"] = "yes";
            // header("Location: profile.php");
            die();
           }else{
               echo "<div class='alert alert-warning'>Password does not match</div>";
           }
       }else{
           echo "<div class='alert alert-warning'>Email does not match</div>";
       }
   }
?>
<!-- /********************LoginForm******************/ -->
    <form class="login-form" action="login.php" method="POST">
        <div class="form-group mb-30">
            <label for="email"><i class="far fa-envelope"></i></label>
            <input type="email" name="email" id="login-email" placeholder="Email Address">
        </div>
        <div class="form-group">
            <label for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" id="login-pass" placeholder="Password">
            <span class="pass-type"><i class="fas fa-eye"></i></span>
        </div>
        <div class="form-group mt-3 mb-3">
            <a href="#0">Forgot Password?</a>
        </div>
        <div class="form-group mb-0">
            <button type="submit" class="custom-button" name="login">LOG IN</button>
        </div>
    </form>
</div>
            <div class="right-side cl-white">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">NEW HERE?</h3>
                    <p>Sign up and create your Account</p>
                    <a href="sign-up.php" class="custom-button transparent">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--============= Account Section Ends Here =============-->
<?php require('footer.php'); ?>