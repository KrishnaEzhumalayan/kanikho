<?php
//get data from form  
$name = $_POST['name'];
$mobile = $ POST['mobile'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "krishna45.ace@gmail.com";
$subject = "Mail From website";
$txt ="Name = " . $name . "\r\n  Mobile =" . $mobile " \r\n  Email = " . $email . "\r\n Message = " . $message ;
$headers = "From: krishna.ezhumalayan@gmail.com" . "\r\n" .
"CC: syegaezhu@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>
