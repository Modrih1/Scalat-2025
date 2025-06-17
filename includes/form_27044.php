<?php	
	if (empty($_POST['name_27216_25026_27044']) && strlen($_POST['name_27216_25026_27044']) == 0 || empty($_POST['email_27216_25026_27044']) && strlen($_POST['email_27216_25026_27044']) == 0 || empty($_POST['message_27216_25026_27044']) && strlen($_POST['message_27216_25026_27044']) == 0)
	{
		return false;
	}
	
	$name_27216_25026_27044 = $_POST['name_27216_25026_27044'];
	$email_27216_25026_27044 = $_POST['email_27216_25026_27044'];
	$message_27216_25026_27044 = $_POST['message_27216_25026_27044'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_27216_25026_27044: $name_27216_25026_27044 \nEmail_27216_25026_27044: $email_27216_25026_27044 \nMessage_27216_25026_27044: $message_27216_25026_27044 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_27216_25026_27044";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>