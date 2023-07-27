<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "info@stc.org.za";
$subjects = "Mail From website \r\n" . $subject;
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@stc.org.za" . "\r\n" .
"CC: pertunia@stc.org.za";
if($email!=NULL){
    mail($to,$subjects,$txt,$headers);
}
//redirect
//header("Location:index.html");
?>