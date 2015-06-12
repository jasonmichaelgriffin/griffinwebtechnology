<?php

//TODO csrf defenses; ask Dylan for assistance as the below doesn't seem to be working
$field_name = $_POST['cf_name'];
//Sanitize Name Input
$field_name = filter_var($field_name, FILTER_SANITIZE_STRING);

$field_email = $_POST['cf_email'];
//Sanitize/Validate Email
$field_email = filter_var($field_email, FILTER_VALIDATE_EMAIL);

$field_message = $_POST['cf_message'];
//Sanitize Message
$field_message = trim($field_message);
$field_message = filter_var($field_message, FILTER_SANITIZE_STRING);



$mail_to = 'jasonmichaelgriffin@gmail.com';
$subject = 'Message from griffinwebtechnology site'.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the reaching out to me. I will be contacting you shortly.');
		//		alter the below location once this is migrated to production
		window.location = '/index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please send an e-mail to sailor_griffin@yahoo.com');
		window.location = '/index.html';
	</script>
<?php
}
?>