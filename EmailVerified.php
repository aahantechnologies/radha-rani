<?php
session_start();
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

    $data = file_get_contents("php://input");

    if (isset($data)) {

         $request = json_decode($data);
		 
		  $email = $request->email;
           echo $email ;
}
    $_SESSION['email'] = "$email"; 
     require "SendEmail.php";


// 	require "connection.php";
//  $query = "SELECT * FROM register1 WHERE email = $email";
//  $statement = $connect->prepare($query);
//  $statement->execute(
//   array(
//   '$email' => $_POST['email']
//   )
//  );
//  $no_of_row = $statement->rowCount();
//  if($no_of_row > 0)
//  {
//   $message = '<label class="text-danger">Email Already Exits</label>';
//  }
//  else
//  {
//   $password = rand(100000,999999);
// //   $encrypted_password = password_hash($password, PASSWORD_DEFAULT);
//   $activation_code = md5(rand());
//   $insert_query = "insert into register1 values (NULL,'$firstname','$lastname','$email','$password','$phonenumber','$activation_code')";
//   $statement = $connect->prepare($insert_query);
//   $statement->execute(
//   array(
//     ':firstname'   => $_POST['firstname'],
//     ':lastname'   => $_POST['lastname'],
//     ':email'   => $_POST['email'],
//     ':password'  => $password,
//      ':phonenumber'   => $_POST['phonenumber'],
//     ':activation_code' => $activation_code,
//     // ':user_email_status' => 'not verified'
//   )
//   );
//   $result = $statement->fetchAll();
//   if(isset($result))
//   {
//   $base_url = "https://www.aahantechnologies.com/RaadhaRaniDesigns/SendEmail.php";
//   $mail_body = "
//   <p>Hi ".$_POST['firstname'].",</p>
//   <p>Thanks for Registration. Your password is ".$password.", This password will work only after your email verification.</p>
//   <p>Please Open this link to verified your email address - ".$base_url."SendEmail.php?activation_code=".$activation_code."
//   <p>Best Regards,<br />Webslesson</p>
//   ";
//   require 'class/class.phpmailer.php';
//   $mail = new PHPMailer;
//   $mail->IsSMTP();        //Sets Mailer to send message using SMTP
//   $mail->Host = 'smtpout.secureserver.net';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
//   $mail->Port = '80';        //Sets the default SMTP server port
//   $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
//   $mail->Username = 'xxxxxxxx';     //Sets SMTP username
//   $mail->Password = 'xxxxxxxx';     //Sets SMTP password
//   $mail->SMTPSecure = '';       //Sets connection prefix. Options are "", "ssl" or "tls"
//   $mail->From = 'info@webslesson.info';   //Sets the From email address for the message
//   $mail->FromName = 'Webslesson';     //Sets the From name of the message
//   $mail->AddAddress($_POST['email'], $_POST['firstname']);  //Adds a "To" address   
//   $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
//   $mail->IsHTML(true);       //Sets message type to HTML    
//   $mail->Subject = 'Email Verification';   //Sets the Subject of the message
//   $mail->Body = $mail_body;       //An HTML or plain text message body
//   if($mail->Send())        //Send an Email. Return true on success or false on error
//   {
//     $message = '<label class="text-success">Register Done, Please check your mail.</label>';
//   }
//   }
//  }



 
?>