<?php

// Check for empty fields
if( empty($_POST['name'] )      ||
	empty( $_POST['email'] )    ||
	empty( $_POST['subject'] )  ||
	empty( $_POST['message'] )  ||
	!filter_var( $_POST['email'], FILTER_VALIDATE_EMAIL ) ) {
		echo "No arguments Provided!";
		return false;
	}

$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Create the email and send the nMessage
$to = "a.e.dalton.16@gmail.com";
$email_subject = "Website Contact Form: $subject";
$email_body = "You have received a new message.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nSubject: $subject\n\nMessage:\n\n$message";
$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

return true;

?>