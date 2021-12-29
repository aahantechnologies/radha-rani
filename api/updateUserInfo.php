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
    $data = file_get_contents("php://input");
    if (isset($data)) {
           $request = json_decode($data);
	    	 $mobileNo = $request->mobileNo;
	    	 $firstname = $request->firstname;
	    	 $lastname = $request->lastname;
		     $email = $request->email;
}
 $mysql_qry = "update UserSignUp set mobileNo='$mobileNo',firstname='$firstname',lastname='$lastname' where email='$email'";
$result = mysqli_query($con ,$mysql_qry);
if($result) {
$response= "User Info Updated Successfully";
}
else {
 $response= "User Info Failed to Update";
}
 echo json_encode(array("server_response"=> $response));
?>