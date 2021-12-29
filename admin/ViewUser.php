
<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="select * from register where id=$id";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Raadharani - Product Details</title>
        <meta name="description" content="Kart Center">
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
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
   
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
	                                <h2 class="page-header-title"> User Detail</h2>
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
                                      <form  method="post" enctype="multipart/form-data">                                                    
                                       <div class="form-group">
								    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Username</label>
                                         <div class="col-md-8 col-sm-4 col-xs-12">
                                        	<label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['Username'];?></label>
									</div>							
								</div>  
								<!-- <div class="form-group">-->
								<!--    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Description</label>-->
        <!--                                 <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                	<label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['Description'];?></label>-->
								<!--	</div>							-->
								<!--</div> -->
								<!-- <div class="form-group">-->
								<!--    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Image</label>-->
        <!--                                 <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                    <label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><a href="../<?php echo $row1['image'];?>" target="_blank" ><img src="<?php echo $row['image'];?>" height="70" width="70"></a></label>-->
								<!--	</div>							-->
								<!--</div> -->
								 <div class="form-group">
								    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Email</label>
                                         <div class="col-md-8 col-sm-4 col-xs-12">
                                    <label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['email'];?></label>
									</div>							
								</div> 
								 <div class="form-group">
								    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Phone no</label>
                                         <div class="col-md-8 col-sm-4 col-xs-12">
                        <label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['phone_no'];?></label>
									</div>							
								</div> 
								<!--<div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">User Profile Image</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                            <a href="<?php //echo $row['image'];?>"  target="_blank"  ><img src="<?php // echo $row['image'];?>" height="70" width="70"></a> -->
								<!--	</div>							-->
								<!--</div>   -->
				            	<div class="form-group">
				                <label class="control-label col-md-2 col-sm-2 col-xs-12">City</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                       	<label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['city'];?></label>
									</div>									
								</div> 
								
									<div class="form-group">
				                <label class="control-label col-md-2 col-sm-2 col-xs-12">Date</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                       	<label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['date'];?></label>
									</div>									
								</div> 
								<!-- <div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">Quantity</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                	<label class="control-label col-md-6 col-sm-6 col-xs-12" style="color: #e7486d;"><?php echo $row['Quantity'];?></label>-->
								<!--	</div>									-->
								<!--</div>-->
							
								
								 
								
								 
								
								<br/>							 
									<br/>
                             <!--<button type="reset" class="btn btn-danger">Reset</button>-->
        <!--                     	<div class="form-group">							 -->
								<!--	<br/>								-->
								<!--<div class="col-md-12 col-sm-12 col-xs-12">-->
								<!--<center>-->
								<!--    <input type="submit" class="btn btn-gradient-01" value="Add" name="updatep"/>-->
								<!--    </center>-->
								<!--</div> </div>-->
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
                    <?php 
                    include 'Footer.php';
                    ?>
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                   
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
       
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/chart/chart.min.js"></script>
        <script src="assets/vendors/js/progress/circle-progress.min.js"></script>
        <script src="assets/vendors/js/calendar/moment.min.js"></script>
        <script src="assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/vendors/js/app/app.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/dashboard/db-default.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>

<?php
if(isset($_REQUEST['updatep']))
{  
// $regid=$_REQUEST['regid'];
$status=$_REQUEST['status'];
  $query1="update Product set status='$status' where regid=$regid";
  if(mysqli_query($con,$query1))
  {
   echo "<script>window.location='Product.php'</script>";
  }
  else
  {
  	 echo "<script>alert('Error...')</script>";
 echo "<script>window.location='Product.php'</script>"; 
 }
}
?>