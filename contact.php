<?php
//get data from form
echo "shamnas";
$name = $_POST['name'];
$email= $_POST['email'];
$phone=$_POST['phone'];
$address= $_POST['address'];
$message= $_POST['message'];
$to = "m.shamnas@sahalat.qa";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n phone =" . $phone . "address = ". $address . "\r\n message =" . $message;
$headers = "From: noreply@sahalat.qa" . "\r\n" .
"CC: shamnasvanimel229@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>