<?php
 if (isset($_SERVER['http://localhost:3001'])) {

        // header("Access-Control-Allow-Origin: {$_SERVER['http://localhost:3001']}");
header('Access-Control-Allow-Origin: http://localhost:3001');
        header('Access-Control-Allow-Credentials: true');

        header('Access-Control-Max-Age: 86400');    // cache for 1 day

    }

    // Access-Control headers are received during OPTIONS requests

    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header('Access-Control-Allow-Origin: http://localhost:3001');

            header("Access-Control-Allow-Methods: GET, POST, OPTIONS");        

       if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))

            header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);

    }
include 'connection.php';
//$con = new mysqli($HostName, $HostUser, $HostPass, $DatabaseName);
$json = file_get_contents('php://input');
 
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
 //$data=json_decode(file_get_contents("php://input") , true);

//$data=json_decode(file_get_contents("php://input") , true);
$firstname=$obj['firstname'];
$lastname=$obj['lastname'];
$email=$obj['email'];
$password=$obj['password'];
$confirmPass=$obj['confirmPass'];
$mobileNo=$obj['mobileNo'];
$image=$obj['image'];



$sql="INSERT INTO `UserSignUp`( `firstname`, `lastname`, `email`,`password`,`confirmPass`, `mobileNo`,`image`) VALUES ('$firstname','$lastname','$email','$password','','$mobileNo','')";
if(mysqli_query($con,$sql))
{
	echo json_encode(array('message'=>'Sign Up Successfully' ,'status'=>'true'));
}else{
	echo json_encode(array('message'=> 'Getting Some Error while SignUp' ,'status'=>'false'));
}
 //mysqli_close($con);



?>