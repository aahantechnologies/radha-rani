
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Raadharani - Dashboard</title>
        <meta name="description" content="Raadharani - Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
         
        <script language="javascript" type="text/javascript">
            $(function() {
            var availableTags = <?php echo json_encode($response); ?>;
            $( "#mygotags" ).autocomplete({
            source: availableTags,
             select: function(event, ui) {
        // Retrieve your id here and do something with it.
          console.log(ui.item.label);
          var email=ui.item.label;
          document.getElementById("hidden1").value = email;
          document.getElementById("goform").submit();
          }
            });
            });
        </script>
      
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <!--<link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">-->
        <!--<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">-->
        <!--<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">-->
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
            ?>  <div class="content-inner">
                 <div class="container-fluid">
                        <!-- Begin Page Header-->
                        <div class="row">
                            <div class="page-header">
	                            <div class="d-flex align-items-center">
	                                <h2 class="page-header-title">Dashboard</h2>
	                                <div>
	                                <div class="page-header-tools">
	                                    <!--<a class="btn btn-gradient-01" href="#">Add Widget</a>-->
	                                </div>
	                                </div>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        <!-- Begin Row -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <?php
//require "connection.php";
$sqlquery ="SELECT COUNT(*) as clienttotal FROM client";
$res = mysqli_query($con, $sqlquery);
$row=mysqli_fetch_array($res);
$sql ="SELECT COUNT(*) as Total FROM restaurantdetail";
$result = mysqli_query($con, $sql);
$row1=mysqli_fetch_array($result);
?>
                        <div class="row flex-row">
                           
                            <!-- Begin Twitter -->
                            <div class="col-xl-3 col-md-6 col-sm-6">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <div class="title text-twitter">Total No. of  User</div>
                                                <div class="number" style="font-size: 2rem;margin: 11px 0 0 0;">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Twitter -->
                            <!-- Begin Linkedin -->
                            <div class="col-xl-3 col-md-6 col-sm-6" style="margin-left:50px">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <div class="title text-twitter">Total No. of Product</div>
                                                <div class="number" style="font-size: 2rem;margin: 11px 0 0 0;">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                            
                            <!-- Begin Linkedin -->
                            <div class="col-xl-3 col-md-6 col-sm-6" style="margin-left:50px">
                                <div class="widget widget-12 has-shadow">
                                    <div class="widget-body">
                                        <div class="media">
                                            <div class="media-body text-center">
                                                <div class="title text-twitter">Canceled Product</div>
                                                <div class="number" style="font-size: 2rem;margin: 11px 0 0 0;">0</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Linkedin -->
                        </div>
                        <!-- End Row -->
                        <!-- Begin Row -->
                        <div class="row flex-row">
                            <div class="col-xl-12 col-md-6">
                                <!-- Begin Widget 09 -->
                                <div class="widget widget-09 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <div class="widget-header d-flex align-items-center">
                                        <!--<h2>Delivered Orders</h2>-->
                                        <div class="widget-options">
                                            <!--<button type="button" class="btn btn-shadow">View all</button>-->
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body">
                                        <div class="row">
                                            
                                       <div style="height: 200px; width: 40%;">
                                                <div>
                                                    <canvas id="orders"></canvas>
                                                </div>
                                            </div>
                                            
                                              <?php
 
 $dataPoints = array(
	array("x" => 946665000000, "y" => 3289000),
	array("x" => 978287400000, "y" => 3830000),
	array("x" => 1009823400000, "y" => 2009000),
	array("x" => 1041359400000, "y" => 2840000),
	array("x" => 1072895400000, "y" => 2396000),
	array("x" => 1104517800000, "y" => 1613000),
	array("x" => 1136053800000, "y" => 1821000),
	array("x" => 1167589800000, "y" => 2000000),
	array("x" => 1199125800000, "y" => 1397000),
	array("x" => 1230748200000, "y" => 2506000),
	array("x" => 1262284200000, "y" => 6704000),
	array("x" => 1293820200000, "y" => 5704000),
	array("x" => 1325356200000, "y" => 4009000),
	array("x" => 1356978600000, "y" => 3026000),
	array("x" => 1388514600000, "y" => 2394000),
	array("x" => 1420050600000, "y" => 1872000),
	array("x" => 1451586600000, "y" => 2140000)
 );
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
    // 		text: "Company Revenue by Year"
	},
	axisY: {
// 		title: "Revenue in USD",
		valueFormatString: "#0,,.",
		suffix: "mn",
		prefix: "$"
	},
	data: [{
		type: "spline",
		markerSize: 5,
		xValueFormatString: "YYYY",
		yValueFormatString: "$#,##0.##",
		xValueType: "dateTime",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
 
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 120px; width: 30%;margin-left:40px"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>    









  <div class="new-orders "style="margin-left:40px">
                                                    <!--<div class="title">New Orders</div>-->
                                                    <div class="circle-orders">
                                                        <div class="percent-orders"></div>
                                                    </div>
                                                </div>









                                           
                                        </div>
                                    </div>
                                </div>
                                <!-- End Widget 09 -->
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
        <!--<script src="assets/vendors/js/base/jquery.min.js"></script>-->
          <script>
          function myFunction(gender) {
          document.getElementById("hidden1").value = gender;
          document.getElementById("goform").submit();
         }
        </script>
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
if(isset($_REQUEST['regid']))
{  
$id=$_REQUEST['regid'];
  $query="delete from admin where regid=$id";

  if(mysqli_query($con,$query))
  {
//   echo "<script>confirm('Are you sure...')</script>";
   echo "<script>alert('Record deleted...')</script>";
   echo "<script>window.location='index.php'</script>";
  }
  else
  {
       echo "<script>alert('Record not deleted...')</script>";
       echo "<script>window.location='index.php'</script>";
  	
 }
}
?>