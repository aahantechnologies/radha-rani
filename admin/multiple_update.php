<?php

//multiple_update.php

include 'connection.php';

if(isset($_POST['hidden_id']))
{
 $newArrival = $_POST['newArrival'];

 $id = $_POST['hidden_id'];
 for($count = 0; $count < count($id); $count++)
 {
  $data = array(
   ':newArrival'   => $newArrival[$count],
   
   ':id'   => $id[$count]
  );
  $query = "
  update Product set newArrival='newArrival' where id='$id'
  ";
  $statement = $connect->prepare($query);
  $statement->execute($data);
 }
}

?>
