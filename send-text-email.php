<?php
$to = 'sk884808@gmail.com';
$subject = $_POST['InputSubject'];
$from = $_POST['InputEmail'];
$message = $_POST['InputMessage']; 

 
// Sending email
if(mail($to, $subject, $message, $from)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>