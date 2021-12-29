// <?php
// require 'assets/autoload.php';
// require "connection.php";
// $emailid = $_SESSION['email'];
// // echo $emailid ; 
// // $length= 4;
// //   $chars = "1234567890";
// //     $password = substr( str_shuffle( $chars ), 0, $length );
//     $firstname = $_POST["firstname"];
// $lastname = $_POST["lastname"];
// $email = $_POST["email"];
// $password = $_POST["password"];
// $phonenumber = $_POST["phonenumber"];
//       $mysql = "insert into register1 values (NULL,'$firstname','$lastname','$email','$password','$phonenumber')";
//     // $mysql ="UPDATE register1 SET password='$password' where email='$emailid'";
//      $result = mysqli_query($con,$mysql);
   
   ?>
<?php 

if (isset($_SERVER['HTTP_ORIGIN'])) {

        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");

        header('Access-Control-Allow-Credentials: true');

        header('Access-Control-Max-Age: 86400');    // cache for 1 day

    }

    // Access-Control headers are received during OPTIONS requests

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))

            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");        

       if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))

            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);

    }
require "connection.php";
  $firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$phonenumber = $_POST["phonenumber"];
//$mysql_qry = "select * from android where email='$user_name' and password='$user_pass'";

 $mysql_qry = "insert into register1 values (NULL,'abc','abc','vaishnavi.dindorkar@gmail.com','123','9175055674')";
$result = mysqli_query($con ,$mysql_qry);
if($result) {
    $to_email = $email;
$subject = "Simple Email text Send." ; 
$body = "Hi, this is the email test for php ";
$headers = "From: vaishnavi.dindorkar@gmail.com" ;
if(mail($to_email,$subject,$body,$headers)){
    echo "email successfully send to $to_email";
}else{
    echo "Email sending failed....";
}
echo "Added";
}
else {
 $response= "Failed";
}
 echo json_encode(array("server_response"=> $response));
?>

<?php


?>