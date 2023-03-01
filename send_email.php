<?php
// Retrieve form data
$name = $_POST['namn'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Format email message
$to = 'rasmuss.brodin@gmail.com'; 
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

// Send email
mail($to, $subject, $message, $headers);
?>