<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get in Touch</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>
    <style>
        h2{
    text-align: center;
     font-family: "Time New Roman";
     color:black;
 }

    </style>
<section class = "container">
    <div class = "row justify-content-center">
        <div class = "col-4">
          <div class = "mydiv"><h2>Get in Touch</h2></div>
            <form method = "post">
                <input type="text" placeholder = "Enter Name" class = "form-control mb-2 border-secondary" name = "name">
                <input type="email" placeholder = "Enter Email" class = "form-control mb-2 border-secondary" name = "email">
                <input type="text" placeholder = "Enter Phone" class = "form-control mb-2 border-secondary" name = "phone">
                <input type="text" placeholder = "Enter Message" class = "form-control mb-2 border-secondary" name = "message">
                

                <button class = "btn btn-secondary w-100" name = "btn">Send</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function sendEmail($name,$email,$phone,$message){

$mail = new PHPMailer(true);

    //Server settings
    $mail->SMTPDebug = 0;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';               
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'smyself7986@gmail.com';                     
    $mail->Password   = 'pxkkaayetfjvjspq';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;          
    
    //Recipients
    $mail->setFrom('smyself7986@gmail.com', 'Mailer');
    $mail->addAddress('smyself7986@gmail.com', ' User');  
    $mail->addReplyTo($email ,$name);
     
    //content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'PHPMailer Class 19 Practice';
    $mail->Body    = '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE_gCCPMuNA9bpRlghjppxL_Gm9bLqgzZ1YiOMa0Z8aMujGVysiKsWy_S8xETLuGk-K7M&usqp=CAU" width="100px"><p style="text-align:center; color:blue;font-size:24px;">Name: '.$name.'<br> Email: '.$email.'<br> Phone: '.$phone.'<br> Message: '.$message.'</p>';

    if($mail->send()){
        echo "<script>alert('Message has been sent')</script>";
     }
}

if(isset($_POST['btn'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

sendEmail($name,$email,$phone,$message);
// echo $name,$email,$phone,$messeag;
}
?>