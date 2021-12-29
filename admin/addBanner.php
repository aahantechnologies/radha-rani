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
        <title>RaadhaRani - Banner</title>
        <meta name="description" content="Money Saving">
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
	                                <h2 class="page-header-title">Banner</h2>
	                            </div>
	                             
                            </div>
                        </div>
            
             <div class="row">
                            <div class="col-xl-12">
                                <!-- Default -->
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Add Banner</h4>
                                    </div>
            
            
             <div class="widget-body">

                                             <form  method="post">               
                                                            		
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Banner</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                         <input type="file" class="form-control" name="image"  required>
									</div>							
								</div>  
								
              <div class="form-group">							 
									<br/>								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<center><input type="submit" class="btn btn-gradient-01" value="Add" name="updatec"/></center>
								</div> </div> <br/>							 
									<br/>
                             <!--<button type="reset" class="btn btn-danger">Reset</button>-->
                            </form>
                            
            </div>
            </div>
            </div>
            </div>
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
// <!--if (isset($_POST["updatep"])) {-->
//     // Get Image Dimension
// <!--    $fileinfo = @getimagesize($_FILES["file-input"]["name"]);-->
// <!--    $width = $fileinfo[0];-->
// <!--    $height = $fileinfo[1];-->
    
  
// <!--    if (! file_exists($_FILES["file-input"]["name"])) {-->
// <!--        $response = array(-->
// <!--            "type" => "error",-->
// <!--            "message" => "Choose image file to upload."-->
// <!--        );-->
// <!--    }   -->
   
// <!--    else if ($width > "100" || $height > "100") {-->
// <!--        $response = array(-->
// <!--            "type" => "error",-->
// <!--            "message" => "Image dimension should be within 100X100"-->
// <!--        );-->
// <!--    } else {-->
// <!--        $target = "image/" . basename($_FILES["file-input"]["name"]);-->
// <!--        if (move_uploaded_file($tmpname,$destination1)) {-->
// <!--            $response = array(-->
// <!--                "type" => "success",-->
// <!--                "message" => "Image uploaded successfully."-->
// <!--            );-->
// <!--        } else {-->
// <!--            $response = array(-->
// <!--                "type" => "error",-->
// <!--                "message" => "Problem in uploading image files."-->
// <!--            );-->
// <!--        }-->
// <!--    }-->
// <!--}-->
?>
<?php
include 'connection.php';
if(isset($_REQUEST['updatec']))
{     
    extract($_REQUEST);
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
       $destination="upload/$newfname";
   // $destination1="upload/$newfname";
   // $destination2="upload/$newfname";
   // $res=move_uploaded_file($tmpname,$destination1); 
     
    //$query="insert into Banner values(NULL,'$destination')";
    // $query="insert into productdetail  values(NULL,'$productname','$image','$price','$shortdisrction','$category')";
    
//     $file = $_FILES["image"]['tmp_name']; // uploaded files
// list($width, $height) = getimagesize($file);
// $string = $width.'x'.$height;
// $predefined_sizes = array('300x250', '468x60', '320x50', '216x36', '168x28', '300x250', '300x50'); // custom image size array
// if(!in_array($string,$predefined_sizes)) {
//     echo "Image Size is not valid, available sizes are 300x250, 468x60, 320x50, 216x36, 168x28, 300x250, 300x50";
//     // Or you can also do to avoid repetion of sizes.
//     //echo "Image Size is not valid, available sizes are ".implode(', ',$predefined_sizes);
//     exit;
// }else{
//     echo 'Valid image'; 
// }
    
    
$query=" update Banner set image='$destination' where id='$id'";
    $res1=mysqli_query($con,$query);     
    if($res1)
    {        
        echo "<script>window.location='addBanner.php'</script>";
    }
 else {        
        echo "<script> alert('Failed')</script>";
        echo "<script>window.location='addBanner.php'</script>";     
      }
}

?>
