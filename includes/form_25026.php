<?php	
	if (empty($_POST['name_27216_25026']) && strlen($_POST['name_27216_25026']) == 0 || empty($_POST['email_27216_25026']) && strlen($_POST['email_27216_25026']) == 0 || empty($_POST['message_27216_25026']) && strlen($_POST['message_27216_25026']) == 0)
	{
		return false;
	}
	
	$name_27216_25026 = $_POST['name_27216_25026'];
	$email_27216_25026 = $_POST['email_27216_25026'];
	$message_27216_25026 = $_POST['message_27216_25026'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_27216_25026: $name_27216_25026 \nEmail_27216_25026: $email_27216_25026 \nMessage_27216_25026: $message_27216_25026 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_27216_25026";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>