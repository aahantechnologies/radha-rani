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
        <title>Raadharani - Products</title>
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
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>-->
        
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">-->


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
	                                <h2 class="page-header-title">Add Product</h2>
	                            </div>
                            </div>
                        </div>
                        <!-- End Page Header -->
                        
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- Default -->
                                <div class="widget has-shadow">
                                    <!-- <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Detail</h4>
                                    </div> -->
                                    <div class="widget-body">
 
                                        <div class="table-responsive">
                                             <form  method="post" enctype="multipart/form-data">                                                    
                                              
                                              <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Product Name</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" name="Title"  required>
                                        
									</div>							
								</div>      
							
								
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Description</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <!--<input class="form-control" type="text" name="Disclaimer" id="mytextarea"  required>-->
                                           <textarea class="form-control" name="Disclaimer" id="mytextarea" style="height:300px"><?php echo $row['Disclaimer'];?></textarea>
									</div>							
								</div>          
                                 <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Product Image</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input  type="file" class="form-control" onclick="myFunction()" id="fileUpload" name="image" required>
									</div>	
							
							<div class="form-group">	
								<div id="aaapppp" ></div>

								</div>   
</div>
 <!--<div class="form-group">-->
									<!--<label class="control-label col-md-2 col-sm-2 col-xs-12"></label>-->
 <!--                                   <div class="col-md-8 col-sm-4 col-xs-12">-->
 <!--                                       <input  type="file" class="form-control" name="image1">-->
	<!--								</div>	-->

	<!--							</div>   -->

 <!--                                <div class="form-group">-->
									<!--<label class="control-label col-md-2 col-sm-2 col-xs-12"></label>-->
 <!--                                   <div class="col-md-8 col-sm-4 col-xs-12">-->
 <!--                                       <input  type="file" class="form-control" name="image2" >-->
	<!--								</div>	-->

	<!--							</div>   -->




                              


<div class="form-group">
                                 <label class="control-label col-md-6 col-sm-6 col-xs-12">Category</label>
                                 <div class="col-md-8 col-sm-4 col-xs-12">
                                   <select id='purpose'   name="category_name" class="form-control" required>
                                        <option>Select category</option>

                                               <?php
 include 'connection.php';
$query1="select * from Category ORDER BY id ASC";
$res5=mysqli_query($con,$query1);
while($row1=mysqli_fetch_assoc($res5))
{
    
                                     
                                     
                                     
?>   
                                    
                                      <option value="<?php echo $row1['category_name'];?>"><?php echo $row1['category_name'];?></option>
                                     
                                    
<?php
}
?>
                                                 
</select>



                                 </div>
                              </div>


<div class="form-group">
                                 <label class="control-label col-md-6 col-sm-6 col-xs-12">Sub Category</label>
                                 <div class="col-md-8 col-sm-4 col-xs-12">
                                   <select  name="subcategory_name" class="form-control" required>
                                        <option >Select subcategory</option>

                                               <?php
 include 'connection.php';
$query1="select * from Subcategory ORDER BY id ASC";
$res5=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res5))
{
?>   
                                     
                                      <option value="<?php echo $row1['subcategory_name'];?>"><?php echo $row1['subcategory_name'];?></option>
<?php
}
?>
                                                 
</select>
                                 </div>
                              </div>
    

 <div class="form-group">
                                 <label class="control-label col-md-6 col-sm-6 col-xs-12">Material</label>
                                 <div class="col-md-8 col-sm-4 col-xs-12">
                                   <select  name="Material" class="form-control" required>
                                        <option >Select Material</option>

                                               <?php
 include 'connection.php';
$query1="select * from Material ORDER BY id ASC";
$res5=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res5))
{
?>   
                                      <option value="<?php echo $row1['Material'];?>"><?php echo $row1['Material'];?></option>
<?php
}
?>
                                                 
</select>
                                 </div>
                              </div>
								

						<div class="form-group">
                                 <label class="control-label col-md-6 col-sm-6 col-xs-12">Color</label>
                                 <div class="col-md-8 col-sm-4 col-xs-12">
                                     
                                   <select   class="form-control"  name="Color[]" id="sel" multiple="multiple">
                                       <!--<option >Select Color</option>-->
                                       
<!--<label class="checkbox"><input type="checkbox" value="java"> Java</label>-->
                                        <?php 
                                            include 'connection.php';
                                            echo $r="SELECT * FROM Color ;";
                                            $rr = mysqli_query($con,$r);
                                            while($row= mysqli_fetch_array($rr))
                                            {
                                        ?>
                                         <input type="checkbox" name="chkbox[]" value=<?php echo $row['Color']; ?>><label><?php echo $row['Color']; ?></label><br/>
                       
                                            <!--echo '<option value="'.$row["Color"].'">'.$row["Color"].'</option>'; -->
                                        <?php
                                            }
                                        ?>
                                    </select>
                                 </div>
                              </div>		
								
								
								
								
								
								
								
 
                              
                             



								
								
		
		
							   <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Washcare</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" name="Washcare"  required>
									</div>							
								</div> 	
							
								<div class="form-group" >
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Quantity</label>
									 <div class="col-md-8 col-sm-4 col-xs-12">
									     <input type="button" onclick="decrementValue()" value="-" />
<input type="text" name="Quantity" value="1" maxlength="2" max="10" size="1" id="number" />
<input type="button" onclick="incrementValue()" value="+" />
<!--<input class="form-control" id="Quantity" name="Quantity"    autocomplete="off" type="number" min="1" required><br/><br/>					-->
								</div> 	
								</div>
						
						                                             <?php
 include 'connection.php';
$query1="select * from Category ";
$res5=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res5))
{

				// 		if(["$category_name"] =='Saree'){
				// 		    echo "saree";
				// 		}
				// 		else{
				// 		  //  echo "incorrect";
				// 		}
						?>
						<?php
}
?>
						 <div id="myDIV1" class="form-group" >
                                 <label  class="control-label col-md-6 col-sm-6 col-xs-12">Sizes</label>
                                 <div class="col-md-8 col-sm-4 col-xs-12">
                                   <select  name="Sizes" class="form-control" required>
                                        <option >Select sizes</option>

                                               <?php
 include 'connection.php';
$query1="select * from Sizes ORDER BY id ASC";
$res5=mysqli_query($con,$query1);
while($row1=mysqli_fetch_array($res5))
{
?>   
                                     
                                      <option value="<?php echo $row1['Sizes'];?>"><?php echo $row1['Sizes'];?></option>
<?php
}
?>
                                                 
</select>
                                 </div>
                              </div>
                                
                                
                                <div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Price</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" name="Price"  required>
									</div>							
								</div> 	
								
								<div class="form-group">
									<label class="control-label col-md-2 col-sm-2 col-xs-12">Discount Price</label>
                                    <div class="col-md-8 col-sm-4 col-xs-12">
                                        <input class="form-control" type="text" name="Discount_Price"  required>
									</div>							
								</div> 	
								
								
                                <div class="form-group">							 
									<br/>								
								<div class="col-md-12 col-sm-12 col-xs-12">
								<center><input type="submit" class="btn btn-gradient-01" value="Upload" onclick="return Upload()"  name="updatep"/></center>
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

<!--Quantity increment decrement-->
  
  
  
<script type="text/javascript">
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
</script>				
		<!--Quantity increment decrement-->	
		
	<!--Multiple images selection	-->
<script>
function myFunction() {
  var x = document.createElement("INPUT");
  x.setAttribute("type", "file");
  //document.body.appendChild(x);
  document.getElementById("aaapppp").appendChild(x); 
}
</script>
	<!--Multiple images selection	-->
	
	
	<!--Images validation-->
<script type="text/javascript">
function Upload() {
    //Get reference of FileUpload.
    var fileUpload = document.getElementById("fileUpload");
 
    //Check whether the file is valid Image.
    var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
    if (regex.test(fileUpload.value.toLowerCase())) {
 
        //Check whether HTML5 is supported.
        if (typeof (fileUpload.files) != "undefined") {
            //Initiate the FileReader object.
            var reader = new FileReader();
            //Read the contents of Image File.
            reader.readAsDataURL(fileUpload.files[0]);
            reader.onload = function (e) {
                //Initiate the JavaScript Image object.
                var image = new Image();
 
                //Set the Base64 string return from FileReader as source.
                image.src = e.target.result;
                       
                //Validate the File Height and Width.
                image.onload = function () {
                    var height = this.height;
                    var width = this.width;
                    if (height > 371 || width > 247) {
                        alert("Height and Width must not exceed 371*247px.");
                        return false;
                    }
                    alert("Uploaded image has valid Height and Width.");
                    return true;
                };
 
            }
        } else {
            alert("This browser does not support HTML5.");
            return false;
        }
    } else {
        alert("Please select a valid Image file.");
        return false;
    }
}
</script>
	<!--Images validation-->
	
	
	
<script>
function myFunctionHide() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "none") {
    x.style.display = "block";
    
  } else {
    x.style.display = "none";
  }
}
</script>

<script>
function myFunctionShow() {
  var x = document.getElementById("myDIV1");
  if (x.style.display === "block") {
    x.style.display = "none";
    
  } else {
    x.style.display = "block";
  }
}
</script>

<script>
$('#purpose').on('change', function () {
    if(this.value == "Saree" || this.value=="Sarees"){
        // $("#business").show();
        //  alert("Please select a valid Image file.");
       myFunctionHide();
    } else {
        // $("#business").hide();
        //  alert(" Image file.");
          myFunctionShow();
    }
});
</script>
 <script type="text/javascript">
// function Upload() {
//     //Get reference of FileUpload.
//     var fileUpload = document.getElementById("fileUpload");
 
//     //Check whether the file is valid Image.
//     var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif|.jpeg|)$");
//     if (regex.test(fileUpload.value.toLowerCase())) {
 
//         //Check whether HTML5 is supported.
//         if (typeof (fileUpload.files) != "undefined") {
//             //Initiate the FileReader object.
//             var reader = new FileReader();
//             //Read the contents of Image File.
//             reader.readAsDataURL(fileUpload.files[0]);
//             reader.onload = function (e) {
//                 //Initiate the JavaScript Image object.
//                 var image = new Image();
 
//                 //Set the Base64 string return from FileReader as source.
//                 image.src = e.target.result;
                       
//                 //Validate the File Height and Width.
//                 image.onload = function () {
//                     var height = this.height;
//                     var width = this.width;
//                     if (height > 460 || width > 351) {
//                         alert("Height and Width must be 351*460.");
//                         return false;
//                     }
//                     alert("Uploaded image has valid Height and Width.");
//                     return true;
//                 };
 
//             }
//         } else {
//             alert("This browser does not support HTML5.");
//             return false;
//         }
//     } else {
//         alert("Please select a valid Image file.");
//         return false;
//     }
// }
 </script>
 <script>
function myFunctionn(text) {
    if(text==text){
        alert("support HTML5.");
    }
 else {
            alert("This browser does not support HTML5.");
            
//         }
}
</script>





    </body>
</html>

<?php
include 'connection.php';



if(isset($_REQUEST['updatep']))
{  
     extract($_REQUEST);
    $filename=$_FILES['image']['name'];
    $tmpname=$_FILES['image']['tmp_name'];
    $newfname=rand(111,111111).'-'.$filename;
       $destination="upload/$newfname";
    $destination1="upload/$newfname";
    $destination2="upload/$newfname";
    
    $res=move_uploaded_file($tmpname,$destination1); 
     $res=move_uploaded_file($tmpname,$destination2); 
//   $now = new DateTime();
$chkbox = $_POST['chkbox'];
 
 $Color = ""; 
 
 foreach($chkbox as $chkNew1) 
 { 
 $Color .= $chkNew1 . ","; 
 } 
 $randomNum = substr(str_shuffle("0123456789"), 0, 8);
            $SKU = 'Raadharani'.$randomNum;
           
  $query="insert into Product values(NULL,'$Title','$Disclaimer','$destination','$destination1','$destination2','$category_name','$subcategory_name','$SKU',
        '$Material','$Color','','$Washcare','$Quantity','$Sizes','$Price','$Discount_Price',CURRENT_DATE())";
    // $query="insert into productdetail  values(NULL,'$productname','$image','$price','$shortdisrction','$category')";
   
   $res1=mysqli_query($con,$query);     
  
//  $query="insert into Product values(NULL,'$Title','$Disclaimer','$destination','$destination1','$destination2','$category_name','$subcategory_name','$SKU',
//          '$Material','$C','$Washcare','$Quantity','$Sizes','$Price','$Discount_Price',CURRENT_DATE())";


    if($res1)
    {        
        echo "<script>window.location='Product.php'</script>";
    }
 else {        
        echo "<script> alert('Failed')</script>";
        echo "<script>window.location='AddProducts.php'</script>";     
      }
}

?>