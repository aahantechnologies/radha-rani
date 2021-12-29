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
        <title>Home Page</title>
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
$query1="select * from homepage";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
?>   
                                        <form method="post" enctype="multipart/form-data">
                                          <div class="form-group">
        									<label class="control-label col-md-2 col-sm-2 col-xs-12">Logo Image</label>
                                        <div class="col-md-8 col-sm-4 col-xs-12">
                                            <img src="../<?php echo $row1['logoimage'];?>" / height="70" width="70">
                                                <input class="form-control"  type="file" name="logoimage" value="<?php echo $row1['logoimage'];?>" >
        									</div>									
        								</div>
        								<div class="form-group">
        									<label class="control-label col-md-2 col-sm-2 col-xs-12">Second Image</label>
                                        <div class="col-md-8 col-sm-4 col-xs-12">
                                            <img src="../<?php echo $row1['second'];?>" / height="70" width="70">
                                                <input class="form-control"  type="file" name="second" value="<?php echo $row1['second'];?>" >
        									</div>									
        								</div>
        								<div class="form-group">
        									<label class="control-label col-md-2 col-sm-2 col-xs-12">Third Image</label>
                                        <div class="col-md-8 col-sm-4 col-xs-12">
                                            <img src="../<?php echo $row1['third'];?>" / height="70" width="70">
                                                <input class="form-control"  type="file" name="third" value="<?php echo $row1['third'];?>" >
        									</div>									
        								</div>
        								<div class="form-group">
        									<label class="control-label col-md-2 col-sm-2 col-xs-12">Fourth Image</label>
                                        <div class="col-md-8 col-sm-4 col-xs-12">
                                            <img src="../<?php echo $row1['fourth'];?>" / height="70" width="70">
                                                <input class="form-control"  type="file" name="fourth" value="<?php echo $row1['fourth'];?>" >
        									</div>									
        								</div>
        								<div class="form-group">
        									<label class="control-label col-md-2 col-sm-2 col-xs-12">Fifth Image</label>
                                        <div class="col-md-8 col-sm-4 col-xs-12">
                                            <img src="../<?php echo $row1['fifth'];?>" / height="70" width="70">
                                                <input class="form-control"  type="file" name="fifth" value="<?php echo $row1['fifth'];?>" >
        									</div>									
        								</div>
        								<div class="form-group">
        									<label class="control-label col-md-2 col-sm-2 col-xs-12">Last Image</label>
                                        <div class="col-md-8 col-sm-4 col-xs-12">
                                            <img src="../<?php echo $row1['lastimg'];?>" / height="70" width="70">
                                                <input class="form-control"  type="file" name="lastimg" value="<?php echo $row1['lastimg'];?>" >
        									</div>									
        								</div>
                                           <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Main Text</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control"  value="<?php echo $row1['maintext'];?>" type="text" name="maintext" required>
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Side Text</label>
                                   <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" value="<?php echo $row1['sidetext'];?>" type="text" name="sidetext" required> 
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Book Cover</label>
                                <div class="col-md-8 col-sm-4 col-xs-12">
                                    <img src="../<?php echo $row1['bookcover'];?>" / height="70" width="70">
                                        <input class="form-control"  type="file" name="image" value="<?php echo $row1['bookcover'];?>" required>
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Side content 1</label>
                                  <div class="col-md-8 col-sm-4 col-xs-12">
                                        <textarea class="form-control"type="text" name="content1" required><?php echo $row1['content1'];?></textarea>
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Side content 2</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <textarea class="form-control"type="text" name="content2" required><?php echo $row1['content2'];?></textarea>
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Side content 3</label>
                                   <div class="col-md-8 col-sm-4 col-xs-12">
                                        <textarea class="form-control"type="text" name="content3" required><?php echo $row1['content3'];?></textarea>
									</div>									
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Side content 4</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <textarea class="form-control"type="text" name="content4" required><?php echo $row1['content4'];?></textarea>
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
      
    
     $filename1=$_FILES['logoimage']['name'];
    $tmpname1=$_FILES['logoimage']['tmp_name'];
    $newfname1=rand(111,111111).'-'.$filename1;
	$destination2="upload/$newfname1";
    $destination3="../upload/$newfname1";
    $res1=move_uploaded_file($tmpname1,$destination3); 
    
     $filename2=$_FILES['second']['name'];
    $tmpname2=$_FILES['second']['tmp_name'];
    $newfname2=rand(111,111111).'-'.$filename2;
	$destination4="upload/$newfname2";
    $destination5="../upload/$newfname2";
    $res2 =move_uploaded_file($tmpname2,$destination5); 
    
     $filename3=$_FILES['third']['name'];
    $tmpname3=$_FILES['third']['tmp_name'];
    $newfname3=rand(111,111111).'-'.$filename3;
	$destination6="upload/$newfname3";
    $destination7="../upload/$newfname3";
    $res3=move_uploaded_file($tmpname3,$destination7); 
    
     $filename4=$_FILES['fourth']['name'];
    $tmpname4=$_FILES['fourth']['tmp_name'];
    $newfname4=rand(111,111111).'-'.$filename4;
	$destination8="upload/$newfname4";
    $destination9="../upload/$newfname4";
    $res4=move_uploaded_file($tmpname4,$destination9); 
    
     $filename5=$_FILES['fifth']['name'];
    $tmpname5=$_FILES['fifth']['tmp_name'];
    $newfname5=rand(111,111111).'-'.$filename5;
	$destination10="upload/$newfname5";
    $destination11="../upload/$newfname5";
    $res5=move_uploaded_file($tmpname5,$destination11); 
    
     $filename6=$_FILES['lastimg']['name'];
    $tmpname6=$_FILES['lastimg']['tmp_name'];
    $newfname6=rand(111,111111).'-'.$filename6;
	$destination12="upload/$newfname6";
    $destination13="../upload/$newfname6";
    $res6=move_uploaded_file($tmpname6,$destination13); 
    
    
     $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);
    
    $query="update homepage set logoimage='$destination2', second='$destination4', third='$destination6', fourth='$destination8', fifth='$destination10', lastimg='$destination12', maintext='$maintext',sidetext='$sidetext',bookcover='$destination',content1='$content1',content2='$content2',content3='$content3',content4='$content4',curdate=now() where regid=1";
     $result=mysqli_query($con,$query);     
    if($result)
    {        
        echo "<script>window.location='HomePage.php'</script>";
    }
 else {        
        echo "<script> alert('Failed')</script>";
        echo "<script>window.location='HomePage.php</script>";     
      }
}
?>
          