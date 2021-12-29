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
        <title>Raadharani-Contact Us</title>
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
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
            <!-- Begin Header -->
          <?php 
   include 'Header.php';
   ?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
            <?php 
            include 'SideMenu.php';
            ?>
                <div class="content-inner">
                    <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Contact Us</h2>
	                                <div>
			                            <ul class="breadcrumb">
			                                <li class="breadcrumb-item"><a href="index.php"><i class="ti ti-home"></i></a></li>
			                                <li class="breadcrumb-item active">Contact Us</li>
			                            </ul>
	                                </div>
	                            </div>
                                <div class="widget-body">
                                        <div class="form-group"></div>
                                    </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Default -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Detail</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
<?php
 include 'connection.php';
$query1="select * from contactus";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
?>   
<form method="post">
                                           <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Phone Number</label>
                                    <div class="col-md-12 col-sm-4 col-xs-12">
                                        <input class="form-control"  value=" <?php echo $row1['phonenumber'];?>" type="text" name="phonenumber" required>
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Email</label>
                                    <div class="col-md-12 col-sm-4 col-xs-12">
                                        <input class="form-control" value="<?php echo $row1['email'];?>" type="text" name="email" required> 
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Address</label>
                                    <div class="col-md-12 col-sm-4 col-xs-12">
                                        <textarea class="form-control"  rows="5" type="text" name="address" required> <?php echo $row1['address'];?>
                                        </textarea>
									</div>									
								</div>
									<div class="form-group">							 
									<br/>								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<center><input type="submit" class="btn btn-gradient-01" value="UPDATE" name="updatecon"/></center>
								</div> </div> 
								</form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Default -->                              
                            </div>
                        </div>
                        <!-- End Row -->
                    </div>
                    <!-- End Container -->
                    <!-- Begin Page Footer-->
                   <?php
           include 'Footer.php';
           ?>
                    <!-- End Page Footer -->
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    
                </div>
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
    </body>
</html>
<?php
if(isset($_REQUEST['updatecon']))
{  
     extract($_REQUEST); 
    $query="insert into contactus values(NULL,'$phonenumber','$email','$address')";
     $res1=mysqli_query($con,$query);     
    if($res1)
    {        
        echo "<script>window.location='ContactUs.php'</script>";
    }
 else {        
        echo "<script> alert('Failed')</script>";
        echo "<script>window.location='ContactUs.php</script>";     
      }
}
?>
          