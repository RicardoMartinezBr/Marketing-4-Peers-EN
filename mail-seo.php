<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['website']))
$website = $_POST['website'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Phone: $phone \n Website: $website \n Email: $email \n Message: $message";
$recipient = "marketing4peers@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
header("Location: http://marketing4peers.com.br/thank-you.html");
?>
