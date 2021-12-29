

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
		 
		 $profileimage = $request->profileimage;
		  
		    $email = $request->email;
                                }
if($profileimage!=''){                                
$now = DateTime::createFromFormat('U.u', microtime(true));

$id = $now -> format('YmdHisu');

$upload_folder = "upload";

$path ="$upload_folder/$id.jpeg";

$actualpath = "$path";

$profileimage= str_replace('data:image/jpeg;base64', '',$profileimage);
$profileimage= str_replace('data:image/jpeg;base64', '',$profileimage);
$profileimage= str_replace(' ', '+',$profileimage);
}
$sql = "update UserSignUp set image='$actualpath' where email='$email'";

if ($con->query($sql) === TRUE) {
	
file_put_contents($path,base64_decode($profileimage));

                $response= "Image Uploaded successfully";

} else {

   $response= "Error: ";

}

 echo json_encode( $response);

?>