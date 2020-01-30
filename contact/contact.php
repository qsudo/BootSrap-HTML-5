<?php

	$name = $_REQUEST[ 'contact-name' ];
	$email = $_REQUEST[ 'contact-email' ];
	$subject = $_REQUEST[ 'contact-subject' ];
	$message = $_REQUEST[ 'contact-message' ];
	$mail_subject = $subject . "( Customer Contact )";
	$message = "Name: ".$name." || Email: ".$email." || Subject: ".$subject." || Message: ".$message;

	/* Replace YOUR_MAIL With Your Mail Address inside '' */
	if ( mail( 'info@qsudo.com', $mail_subject, $message, "From:" . $email ) ) {
		echo "Thank you <strong>$name</strong> for reaching out.  We will be in touch shortly.";
	} else {
		echo "Error in sending message! Please try again";
	}

 ?>
