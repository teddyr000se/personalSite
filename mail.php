<?php 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$company = $_POST['company'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$formcontent="From: $firstName $lastName \n $email \n $company \n Message: $message \n ";
	$recipient = "travisedlefsen@gmail.com";
	$subject = "Contact Form";
	$mailheader = "From: $email \r\n";
	echo $firstName + $email;
	// mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
	
?>