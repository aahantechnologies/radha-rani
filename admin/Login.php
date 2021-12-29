<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<?php
 include 'connection.php';
 session_start();
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Login- Raadharani</title>
        <meta name="description" content="RaadhRani">
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
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body class="bg-fixed-02">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <div style="color:green;font-size: 3.6em;">Raadharni</div>
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
        <!-- Begin Container -->
        <div class="container-fluid h-100 overflow-y">
            <div class="row flex-row h-100">
                <div class="col-12 my-auto">
                    <div class="password-form mx-auto">
                        <div class="logo-centered" style="font-size: 1.6em;color: #7dbb2a;margin-bottom: 33px;width:35%;">
                        Raadharani
                        </div>
                        <h3 style="color: #a75463;">Admin Login</h3>
                        <form method="post">
                            <div class="group material-input">
							    <input type="text" name="username" required>
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>User Name</label>
                            </div>
                            <div class="group material-input">
							    <input type="password" name="password" required>
							    <span class="highlight"></span>
							    <span class="bar"></span>
							    <label>Password</label>
                            </div>
                        <div class="button text-center">
                            <button type="submit" name="adminlogin" class="btn btn-lg btn-gradient-01">
                                Login
                            </button>
                        </div>
                        </form>
                    </div>        
                </div>
                <!-- End Col -->
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
    </body>
</html>

<?php

if(isset($_REQUEST['adminlogin']))
{
  $username=$_REQUEST['username'];
  $password=$_REQUEST['password'];
  $query="select * from Admin where username='$username' and password='$password'";
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