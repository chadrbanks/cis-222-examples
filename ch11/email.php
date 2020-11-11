<?php

$to 		= 'Brianagrima@gmail.com,datoche-juarez@hawkmail.hfcc.edu';
$subject 	= 'The Subject';
$message 	= 'The actual content of the message goes here.';
$h 			= 'From: crbanks1@hfcc.edu' . "\r\n" . 'Reply-To: crbanks1@hfcc.edu' . "\r\n" . 'X-Mailer: PHP/' . phpversion();

$status = mail($to, $subject, $message, $h );

var_dump( $status );