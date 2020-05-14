<?php

$name = $_Post['name']:
$visitor_email = $_Post['email'];
$number = $_Post['number'];
$message = $_Post['message'];


$email_from = 'ollierobins93@gmail.com';

$email_subject = 'New Form Submission';

$email_body =
				"Name: $name\n\n"
				"visitor-email: $visitor_email\n\n"
				"number: $number\n\n";
				"message: $message\n\n";

$to = 'ollierobins93@gmail.com';

mail($to, $email_subject, $email_body);

header('location:index1.html');


?>
