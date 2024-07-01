
<!--============= Account Section Starts Here =============-->
<?php
require('header.php');
require('nav.php');
require('hero-section.php');
?>
    <section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                        <h2 class="title">SIGN UP</h2>
                        <p>We're happy you're here!</p>
                    </div>
<?php
    if(isset($_POST["submit"])) {
        $fullName = $_POST["fullname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $passwordRepeat = $_POST["repeat_password"];
        
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $errors = array();
        
        if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
        array_push($errors,"All fields are required");
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Email is not valid");
        }
        if (strlen($password)<8) {
        array_push($errors,"Password must be at least 8 charactes long");
        }
        if ($password!==$passwordRepeat) {
        array_push($errors,"Password does not match");
        }
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $rowCount = mysqli_num_rows($result);
        if ($rowCount>0) {
        array_push($errors,"Email already exists!");
        }
        if (count($errors)>0) {
        foreach ($errors as  $error) {
            echo "<div class='alert alert-warning'>$error</div>";
        }
        }else{
        
        $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
        $stmt = mysqli_stmt_init($conn);
        $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
        if ($prepareStmt) {
            mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
            mysqli_stmt_execute($stmt);
            echo "<div class='alert alert-success'>You are registered successfully.</div>";
        }else{
            die("Something went wrong");
        }
        }
    }
    ?>
    <!-- /**********************SignUpForm*****************/ -->
                    <form class="login-form" action="sign-up.php" method="POST">
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="fa-solid fa-user"></i></label>
                            <input type="text" name="fullname" id="login-email" placeholder="Full Name" required>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-email"><i class="far fa-envelope"></i></label>
                            <input type="email" name="email" id="login-email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" name="password" id="login-pass" placeholder="Password" required>
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group mb-30">
                            <label for="login-pass"><i class="fas fa-lock"></i></label>
                            <input type="password" name="repeat_password" id="login-pass" placeholder="Retype Password" required>
                            <span class="pass-type"><i class="fas fa-eye"></i></span>
                        </div>
                        <div class="form-group checkgroup mb-30">
                            <input type="checkbox" name="terms" id="check"><label for="check">The Terms of Use apply</label>
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="custom-button" value="register" name="submit">SIGN UP</button>
                        </div>
                    </form>
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                        <p>Log in and go to your Dashboard.</p>
                        <a href="login.php" class="custom-button transparent">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->
    <?php require('footer.php'); ?>