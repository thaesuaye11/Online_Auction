<?php
session_start();
require('header.php');
require('nav.php');
require('hero-section.php');
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
 }
?>

<section class="account-section padding-bottom">
        <div class="container">
            <div class="account-wrapper mt--100 mt-lg--440">
                <div class="left-side">
                    <div class="section-header" data-aos="zoom-out-down" data-aos-duration="1200">
                        <h2 class="title">Welcome</h2>
                        <a href="logout.php" class="btn btn-warning">Logout</a>
                    </div>
                    
                </div>
                <div class="right-side cl-white">
                    <div class="section-header mb-0">
                        <h3 class="title mt-0">NEW HERE?</h3>
                        <p>Sign up and create your Account</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============= Account Section Ends Here =============-->
<?php require('footer.php'); ?>