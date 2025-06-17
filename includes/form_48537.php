<?php	
	if (empty($_POST['name_24998_48537']) && strlen($_POST['name_24998_48537']) == 0 || empty($_POST['email_24998_48537']) && strlen($_POST['email_24998_48537']) == 0 || empty($_POST['message_24998_48537']) && strlen($_POST['message_24998_48537']) == 0)
	{
		return false;
	}
	
	$name_24998_48537 = $_POST['name_24998_48537'];
	$email_24998_48537 = $_POST['email_24998_48537'];
	$message_24998_48537 = $_POST['message_24998_48537'];
	$optin_24998_48537 = $_POST['optin_24998_48537'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_24998_48537: $name_24998_48537 \nEmail_24998_48537: $email_24998_48537 \nMessage_24998_48537: $message_24998_48537 \nOptin_24998_48537: $optin_24998_48537 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_24998_48537";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>