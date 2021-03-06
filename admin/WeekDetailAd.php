<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400'); // cache for 1 day
}

// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");

if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

exit(0);
}
require "connection.php";

  $data = file_get_contents("php://input");

$sql ="SELECT * FROM weekdetail";
$result = mysqli_query($con, $sql);
$response = array();
while($row = mysqli_fetch_array($result))
{
array_push($response, array("regid"=>$row[0],
                                                      "firstimg"=>$row['firstimg'],
                                                      "firsturl"=>$row['firsturl'],
                                                      "secondimg"=>$row['secondimg'],
                                                      "secondurl"=>$row['secondurl'],
                                                      "thirdimg"=>$row['thirdimg'],
                                                      "thirdurl"=>$row['thirdurl'],
                                                      "fourthimg"=>$row['fourthimg'],
                                                      "fourthurl"=>$row['fourthurl'],
                                                      "fifthimg"=>$row['fifthimg'],
                                                      "fifthurl"=>$row['fifthurl'],
                                                      "lastimg"=>$row['lastimg'],
                                                      "lasturl"=>$row['lasturl']));
}
echo json_encode(array("server_response"=> $response));
?>
