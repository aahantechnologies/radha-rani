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
require "connection.php";
$Title = $_POST["Title"];
$image = $_POST["image"];
$description = $_POST["description"];
$Price = $_POST["Price"];
$discount_price = $_POST["discount_price"];
$user_name = $_POST["user_name"];
$user_email = $_POST["user_email"];
$user_address = $_POST["user_address"];



$sql="insert into Wishlist values (NULL,'$Title','$image','$description','$Price','$discount_price','$user_name','$user_email','$user_address',now())";
if(mysqli_query($con,$sql))
{
	echo json_encode(array('message'=>'Added to Wishlist Successfully' ,'status'=>'true'));
}else{
	echo json_encode(array('message'=> 'Getting Some Error while dding to Wishlist' ,'status'=>'false'));
}

 

?>