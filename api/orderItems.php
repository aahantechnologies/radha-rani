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
$name=$obj['name'];
$phone=$obj['phone'];
$address=$obj['address'];
$product_name=$obj['product_name'];
$quantity=$obj['quantity'];
$total_amt=$obj['total_amt'];
$shipping=$obj['shipping'];
$pay_mode=$obj['pay_mode'];
$pay_status=$obj['pay_status'];
$order_status=$obj['order_status'];


$sql="INSERT INTO `order_details`(`name`, `phone`, `address`,`product_name`,`quantity`,`total_amt`,`shipping`,`pay_mode`,`pay_status`,`order_status`) VALUES 
                             ('$name','$phone','$address','$product_name','$quantity','$total_amt','$shipping','$pay_mode','$pay_status','$order_status')";
if(mysqli_query($con,$sql))
{
	echo json_encode(array('message'=>'Item ordered Successfully' ,'status'=>'true'));
}else{
	echo json_encode(array('message'=> 'Getting Some Error while ordering item' ,'status'=>'false'));
}
 //mysqli_close($con);



?>