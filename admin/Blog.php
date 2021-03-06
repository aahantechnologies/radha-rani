<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<?php
   include 'connection.php';
   $query2="select *  from blog where id=1";
   $res2=mysqli_query($con,$query2);
   $row = mysqli_fetch_array($res2);
   ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Raadharani - Blogs</title>
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
        
        <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=t8jrtkkvqsczrbf37dnpx5m3m2akulec2au7p79fgt3p7glt'></script>
<script src="https://cdn.tiny.cloud/1/t8jrtkkvqsczrbf37dnpx5m3m2akulec2au7p79fgt3p7glt/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    
    <script type="text/javascript">
  tinymce.init({
    selector: '#mytextarea',
//     plugins: 'autolink lists  media     table advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',

//                     'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',

//                     'save table contextmenu directionality emoticons template paste textcolor'
//  ',
    //   toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    
  });
  </script>
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
	                                <h2 class="page-header-title">Blogs</h2>
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
                                             <form  method="post" >                                                    
                                              <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Blogs</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                      <textarea class="form-control" name="blog_name" id="mytextarea" style="height:300px"><?php echo $row['blog_name'];?></textarea>
									</div>							
								</div>  
								<!--<div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">User Profile Image</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input type="file" class="form-control" name="image" required>-->
								<!--	</div>							-->
								<!--</div>   -->
				    <!--        	<div class="form-group">-->
				    <!--            <label class="control-label col-md-2 col-sm-2 col-xs-12">User Email </label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input class="form-control" type="email" name="email"  required>-->
								<!--	</div>									-->
								<!--</div> -->
								<!-- <div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">User Phone Number</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input class="form-control" type="text" name="phone_no" required>-->
								<!--	</div>									-->
								<!--</div> -->
								<!--<div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">Password</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input class="form-control" type="text" name="password" required>-->
								<!--	</div>									-->
								<!--</div>    -->
								
								<!--	<div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">Date</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input class="form-control" type="text" name="date" required>-->
								<!--	</div>									-->
								<!--</div>     -->
								
								<!--<div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">City</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input class="form-control" type="text" name="city" required>-->
								<!--	</div>									-->
								<!--</div>      -->
								
								<!--<div class="form-group">-->
								<!--	<label class="control-label col-md-6 col-sm-6 col-xs-12">Status</label>-->
        <!--                            <div class="col-md-8 col-sm-4 col-xs-12">-->
        <!--                                <input class="form-control" type="text" name="status" required>-->
								<!--	</div>									-->
								<!--</div>        -->

								<div class="form-group">							 
									<br/>								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<center><input type="submit" class="btn btn-gradient-01" value="Add" name="updatep"/></center>
								</div> </div> <br/>							 
									<br/>
                             <!--<button type="reset" class="btn btn-danger">Reset</button>-->
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
                            <span aria-hidden="true">??</span>
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
//include 'connection.php';
//if(isset($_REQUEST['updatep']))
//{  
    // extract($_REQUEST);
   // $filename=$_FILES['image']['name'];
   // $tmpname=$_FILES['image']['tmp_name'];
   // $newfname=rand(111,111111).'-'.$filename;
//	$destination="http://www.aahantechnologies.com/Raadharani/upload/$newfname";
   // $destination1="../upload/$newfname";
   // $res=move_uploaded_file($tmpname,$destination1);  
   // $query="insert into blog values(NULL,'$blog_name')";
    // $res1=mysqli_query($con,$query);     
   // if($res1)
    {        
   //     echo "<script>window.location='terms&condition.php'</script>";
    }
// else {        
      //  echo "<script> alert('Failed')</script>";
       // echo "<script>window.location='terms&condition.php'</script>";     
      //}
//}
?>