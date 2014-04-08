<?php

	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'spurgeon@misena.edu.co';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n"."Here is the message:\n $message ";

	$to = $_POST['email'];
 
	$headers = "From: $email_from \r\n";
	 
	$headers = "Reply-To: $visitor_email \r\n";
	 
	if(mail($to,$email_subject,$email_body,$headers)){

		echo '

		<script type="text/javascript">
			alert("Has enviado");
		</script>

		';

	}else{
		echo'
		<script type="text/javascript">
			alert("No he enviado");
		</script>
		';
	}
 
?>