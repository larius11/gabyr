<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['date'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Not enough correct arguments provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$date = $_POST['date'];
	
// create email body and send it	
$to = "seriumone@gmail.com"; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Appointment Request:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nDate:\n$date";
$headers = "From: ricardoriveron.com\n";
$headers .= "Reply-To: $email_address";	
$send_mail = mail($to,$email_subject,$email_body,$headers);
if ($send_mail) {
	return true;			
} else {
	return false;
}
?>
