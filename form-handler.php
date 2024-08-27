<?php
$name= $_POST['name'];  /* the name attributes value of html form */
$visitor_email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];

$email_from= 'info@gmail.com';
$email_subject= 'new Form Submission';

$email_body= "User Name: $name.\n".
            "User email: $visitor_email.\n".
            "User Name: $subject.\n".
            "User Message: $message.\n";          


$to ="jui77667@gmai.com";
$headers= "From: $email_from \n";

$headers .="Reply-To: $visitor_email \n";

mail($to,$subject,$email_body,$headers);    /* to send all the information to the email id */

header("Location: contact.html"); /* the location where we want to redirect the user after submitting the form */

?>