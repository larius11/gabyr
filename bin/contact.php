<?php

	$name = $_POST['fname'];
	$phone = $_POST['phone'];
	$email_address = $_POST['email'];
	$date = $_POST['date'];
	$bool = 0;

	$hair = $_POST["optionsRadiosInline"];
	$color = $_POST["RadiosInline"];
	$lights = $_POST["Radiosline"];
	$correct = $_POST['correct'];
	$style = $_POST["Radios"];


	switch($hair){
        case "1":
            $service = "Haircut - W";
            $bool = 1;
            break;
        case "2":
            $service = "Haircut - M";
            $bool = 1;
            break;
        case "3":
            break;
    }
    switch($color){
        case "1":
            if ($bool == 1){
                $service .= ", Color - All";
            }else{
                $service = "Color - All";
            	$bool = 1;
            }
            break;
        case "2":
            if ($bool == 1){
                $service .= ", Color - Roots";
            }else{
                $service = "Color - Roots";
                $bool = 1;
            }
            break;
        case "3":
            break;
    }
    switch($lights){
        case "1":
            if ($bool == 1){
                $service .= ", Highlights - Dimensional";
            }else{
                $service = "Highlights - Dimensional";
                $bool = 1;
            }
            break;
        case "2":
            if ($bool == 1){
                $service .= ", Highlights - Full";
            }else{
                $service = "Highlights - Full";
                $bool = 1;
            }
            break;
        case "3":
            if ($bool == 1){
                $service .= ", Highlights - Partial";
            }else{
                $service = "Highlights - Partial";
                $bool = 1;
            }
            break;
        case "4":
            break;
    }
    switch($correct){
        case "on":
            if ($bool == 1){
                $service .= ", Color Correction";
            }else{
                $service = "Color Correction";
                $bool = 1;
            }
            break;
        default:
            break;
    }
    switch($style){
        case "1":
            if ($bool == 1){
                $service .= ", Style - Blow";
            }else{
                $service = "Style - Blow";
                $bool = 1;
            }
            break;
        case "2":
            if ($bool == 1){
                $service .= ", Style - Iron";
            }else{
                $service = "Style - Iron";
                $bool = 1;
            }
            break;
        case "3":
            break;
    }
    if ($bool != 0){
        $service .= ".";
    }else {
    	$service = "No service selected.";
    }
		
	// create email body and send it	
	$to = "gabyriveron75@gmail.com"; // PUT YOUR EMAIL ADDRESS HERE
	$email_subject = "Appointment Request:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
	$email_body = "Here are the details:\n\nName: $name\n\nPhone: $phone\n\nEmail: $email_address\n\nDate:\n$date\n\nService: \n$service";
	$headers = "From: ricardoriveron.com\n";
	$headers .= "Reply-To: $email_address";	
	$send_mail = mail($to,$email_subject,$email_body,$headers);
	if ($send_mail) {
		header("Location: ../index.php");
		return true;			
	} else {
		return false;
	}
?>
