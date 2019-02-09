<?php

// Inputfields are filled?
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
{
	// Send the post request with input fields values.
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = nl2br($_POST['message']);
	
	// Email address to send the message.
	$emailTo = "fisfarca@googlemail.com";
	
	// Email definition.
	$subject = "Contact Form Message";
	
	$message = "<b>Name:</b> ".$name." <br><b>Email:</b> ".$email." <p>".$message."</p>";
	
	$headers = "From: $email\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	
	// Sending email process and output.
	if (mail($emailTo, $subject, $message, $headers))
	{
		echo "success";
	} 
	else 
	{
		echo "The server failed to send the message. Please try again later.";
	}
}
?>