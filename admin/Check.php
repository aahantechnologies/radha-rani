<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - Login</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="assets/css/animate/animate.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-white">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
            <div style="color:#e5486d;font-size: 3.6em;"> Aaryan Choudhary</div>
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid no-padding h-100">
            <div class="row flex-row h-100 bg-white">
                <!-- Begin Left Content -->
                <div class="col-xl-3 col-lg-5 col-md-5 col-sm-12 col-12 no-padding">
                    <div class="elisyam-bg background-03">
                        <div class="elisyam-overlay overlay-08"></div>
                        <div class="authentication-col-content-2 mx-auto text-center">
                            <h1>Aaryan Choudhary</h1>
                            <span class="description">
                                Best Book Seller. 
                            </span>
                        </div>
                    </div>
                </div>
                <!-- End Left Content -->
                <!-- Begin Right Content -->
                <div class="col-xl-9 col-lg-7 col-md-7 col-sm-12 col-12 my-auto no-padding">
                    <!-- Begin Form -->
                    <div class="authentication-form-2 mx-auto">
                        <div class="tab-content" id="animate-tab-content">
                            <!-- Begin Sign In -->
                            <div role="tabpanel" class="tab-pane show active" id="singin" aria-labelledby="singin-tab">
                                <h3>Sign In</h3>
                                <form method="post">
                                    <div class="group material-input">
        							    <input type="text" name="username" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Username</label>
                                    </div>
                                    <div class="group material-input">
        							    <input type="password" name="password" required>
        							    <span class="highlight"></span>
        							    <span class="bar"></span>
        							    <label>Password</label>
                                    </div>
                                <div class="sign-btn text-center">
                                       <button type="submit" name="adminlogin" class="btn btn-lg btn-gradient-01"> Sign In </button>
                                </div>
                                </form>
                            </div>
                            <!-- End Sign In -->
                            <!-- Begin Sign Up -->
                            <!--<div role="tabpanel" class="tab-pane" id="signup" aria-labelledby="signup-tab">-->
                            <!--    <h3>Create An Account</h3>-->
                            <!--    <form>-->
                            <!--        <div class="group material-input">-->
                            <!--            <input type="text" required>-->
                            <!--            <span class="highlight"></span>-->
                            <!--            <span class="bar"></span>-->
                            <!--            <label>Email</label>-->
                            <!--        </div>-->
                            <!--        <div class="group material-input">-->
                            <!--            <input type="password" required>-->
                            <!--            <span class="highlight"></span>-->
                            <!--            <span class="bar"></span>-->
                            <!--            <label>Password</label>-->
                            <!--        </div>-->
                            <!--        <div class="group material-input">-->
                            <!--            <input type="password" required>-->
                            <!--            <span class="highlight"></span>-->
                            <!--            <span class="bar"></span>-->
                            <!--            <label>Confirm Password</label>-->
                            <!--        </div>-->
                            <!--    </form>-->
                            <!--    <div class="row">-->
                            <!--        <div class="col text-left">-->
                            <!--            <div class="styled-checkbox">-->
                            <!--                <input type="checkbox" name="checkbox" id="agree">-->
                            <!--                <label for="agree">I Accept <a href="#">Terms and Conditions</a></label>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <div class="sign-btn text-center">-->
                            <!--        <a href="db-default.html" class="btn btn-lg btn-gradient-01">-->
                            <!--            Sign Up-->
                            <!--        </a>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <!-- End Sign Up -->
                        </div>
                    </div>
                    <!-- End Form -->                        
                </div>
                <!-- End Right Content -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Container -->    
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/components/tabs/animated-tabs.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>

<?php

if(isset($_REQUEST['adminlogin']))
{
  $username=$_REQUEST['username'];
  $password=$_REQUEST['password'];
  $query="select * from adminlogin where username='$username' and password='$password'";
  $res=mysqli_query($con,$query);
  $num=mysqli_num_rows($res);
  if($num>0):
         $_SESSION['username'] = $username;
  	echo "<script>window.location='index.php'</script>";
  else:
  	echo "<script>alert('Login failed....')</script>";
  	echo "<script>window.location='Login.php'</script>";
  endif;
}
?>