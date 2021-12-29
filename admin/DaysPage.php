 <?php
 include 'connection.php';
 ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Aaryan - Dashboard</title>
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
	                                <h2 class="page-header-title">365 Days Page Advertisement</h2>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
 <?php
$query1="select * from dayspage";
$res1=mysqli_query($con,$query1);
$row1=mysqli_fetch_array($res1);
?>                         
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
									<label class="control-label col-md-2 col-sm-2 col-xs-12">First image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                          <img src="../<?php echo $row1['firstimg'];?>" / height="70" width="70">
                                        <input class="form-control" type="file" name="firstimg" required>
									</div>							
								</div> 
								   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">First image Link</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" value="<?php echo $row1['firsturl'];?>" name="firstimglink" required>
									</div>							
								</div>  
							   <div class="form-group">								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-gradient-01" value="SAVE" name="firstadd"/>
								</div>
								</div>
								</form>
								<br/>
								<br/>
								<br/>
                                 <form  method="post" enctype="multipart/form-data">                                                    
                                   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Second image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                         <img src="../<?php echo $row1['secondimg'];?>" height="70" width="70">
                                        <input class="form-control" type="file" name="secondimg" required>
									</div>							
								</div> 
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Second image Link</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" value="<?php echo $row1['secondurl'];?>" name="secondimglink" required>
									</div>							
								</div>  
							   <div class="form-group">								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-gradient-01" value="SAVE" name="secondadd"/>
								</div>
								</div>
								</form>
								<br/>
								<br/>
								<br/>
								 <form  method="post" enctype="multipart/form-data">                                                    
                                   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Third image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                         <img src="../<?php echo $row1['thirdimg'];?>"  height="70" width="70">
                                        <input class="form-control" type="file" name="thirdimg" required>
									</div>							
								</div>  
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Third image Link</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" value="<?php echo $row1['thirdurl'];?>" name="thirdimglink" required>
									</div>							
								</div>  
							   <div class="form-group">								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-gradient-01" value="SAVE" name="thirdadd"/>
								</div>
								</div>
								</form>
								<br/>
								<br/>
								<br/>
								 <form  method="post" enctype="multipart/form-data">                                                    
                                   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Fourth image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                         <img src="../<?php echo $row1['fourthimg'];?>"  height="70" width="70">
                                        <input class="form-control" type="file" name="fourthimg" required>
									</div>							
								</div>
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Fourth image Link</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" value="<?php echo $row1['fourthurl'];?>" name="fourthimglink" required>
									</div>							
								</div>  
							   <div class="form-group">								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-gradient-01" value="SAVE" name="fourthadd"/>
								</div>
								</div>
								</form>
								<br/>
								<br/>
								<br/>
								 <form  method="post" enctype="multipart/form-data">                                                    
                                   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Fifth image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <img src="../<?php echo $row1['fifthimg'];?>" / height="70" width="70">
                                        <input class="form-control" type="file" name="fifthimg" required>
									</div>							
								</div> 
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Fifth image Link</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" value="<?php echo $row1['fifthurl'];?>" name="fifthimglink" required>
									</div>							
								</div>  
							   <div class="form-group">								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-gradient-01" value="SAVE" name="fifthadd"/>
								</div>
								</div>
								</form>
								<br/>
								<br/>
								<br/>
								 <form  method="post" enctype="multipart/form-data">                                                    
                                   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Last image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                         <img src="../<?php echo $row1['lastimg'];?>" / height="70" width="70">
                                        <input class="form-control" type="file" name="lastimg" required>
									</div>							
								</div>  
								  <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Last image Link</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" value="<?php echo $row1['lasturl'];?>" name="lastimglink" required>
									</div>							
								</div>  
							   <div class="form-group">								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<input type="submit" class="btn btn-gradient-01" value="SAVE" name="lastadd"/>
								</div>
								</div>
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
        <!-- Begin Success Modal -->
        <div id="delay-modal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <div class="sa-icon sa-success animate" style="display: block;">
                            <span class="sa-line sa-tip animateSuccessTip"></span>
                            <span class="sa-line sa-long animateSuccessLong"></span>
                            <div class="sa-placeholder"></div>
                            <div class="sa-fix"></div>
                        </div>
                        <div class="section-title mt-5 mb-5">
                            <h2 class="text-dark">Meeting successfully created</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Success Modal -->
        <!-- Begin Modal -->
        <div id="modal-view-event" class="modal modal-top fade calendar-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title event-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">×</span>
                            <span class="sr-only">close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="media">
                            <div class="media-left align-self-center mr-3">
                                <div class="event-icon"></div>
                            </div>
                            <div class="media-body align-self-center mt-3 mb-3">
                                <div class="event-body"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Modal -->
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
if(isset($_REQUEST['firstadd']))
{
     extract($_REQUEST);
    $filename=$_FILES['firstimg']['name'];
    $tmpname=$_FILES['firstimg']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);  
    $query="update dayspage set firstimg='$destination', firsturl='$firstimglink' where regid=1";    
    $res1=mysqli_query($con,$query);
       if($res1 && $res)
    {        
        echo "<script>window.location='DaysPage.php'</script>";
    }
 else {        
        echo "<script> alert('Record not updated')</script>";
        echo "<script>window.location='DaysPage.php'</script>";     
       }
}
?>
<?php
if(isset($_REQUEST['secondadd']))
{
     extract($_REQUEST);
    $filename=$_FILES['secondimg']['name'];
    $tmpname=$_FILES['secondimg']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);  
    $query="update dayspage set secondimg='$destination', secondurl='$secondimglink' where regid=1";    
    $res1=mysqli_query($con,$query);
       if($res1 && $res)
    {        
        echo "<script>window.location='DaysPage.php'</script>";
    }
 else {        
        echo "<script> alert('Record not updated')</script>";
        echo "<script>window.location='DaysPage.php'</script>";     
       }
}
?>
<?php
if(isset($_REQUEST['thirdadd']))
{
     extract($_REQUEST);
    $filename=$_FILES['thirdimg']['name'];
    $tmpname=$_FILES['thirdimg']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);  
    $query="update dayspage set thirdimg='$destination', thirdurl='$thirdimglink' where regid=1";    
    $res1=mysqli_query($con,$query);
       if($res1 && $res)
    {        
        echo "<script>window.location='DaysPage.php'</script>";
    }
 else {        
        echo "<script> alert('Record not updated')</script>";
        echo "<script>window.location='DaysPage.php'</script>";     
       }
}
?>
<?php
if(isset($_REQUEST['fourthadd']))
{
     extract($_REQUEST);
    $filename=$_FILES['fourthimg']['name'];
    $tmpname=$_FILES['fourthimg']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);  
    $query="update dayspage set fourthimg='$destination', fourthurl='$fourthimglink' where regid=1";    
    $res1=mysqli_query($con,$query);
       if($res1 && $res)
    {        
        echo "<script>window.location='DaysPage.php'</script>";
    }
 else {        
        echo "<script> alert('Record not updated')</script>";
        echo "<script>window.location='DaysPage.php'</script>";     
       }
}
?>
<?php
if(isset($_REQUEST['fifthadd']))
{
     extract($_REQUEST);
    $filename=$_FILES['fifthimg']['name'];
    $tmpname=$_FILES['fifthimg']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);  
    $query="update dayspage set fifthimg='$destination', fifthurl='$fifthimglink' where regid=1";    
    $res1=mysqli_query($con,$query);
       if($res1 && $res)
    {        
        echo "<script>window.location='DaysPage.php'</script>";
    }
 else {        
        echo "<script> alert('Record not updated')</script>";
        echo "<script>window.location='DaysPage.php'</script>";     
       }
}
?>
<?php
if(isset($_REQUEST['lastadd']))
{
     extract($_REQUEST);
    $filename=$_FILES['lastimg']['name'];
    $tmpname=$_FILES['lastimg']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
	$destination="upload/$newfname";
    $destination1="../upload/$newfname";
    $res=move_uploaded_file($tmpname,$destination1);  
    $query="update dayspage set lastimg='$destination', lasturl='$lastimglink' where regid=1";    
    $res1=mysqli_query($con,$query);
       if($res1 && $res)
    {        
        echo "<script>window.location='DaysPage.php'</script>";
    }
 else {        
        echo "<script> alert('Record not updated')</script>";
        echo "<script>window.location='DaysPage.php'</script>";     
       }
}
?>