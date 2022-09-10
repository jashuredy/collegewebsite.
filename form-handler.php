<?php
$name=$_POST['name'];

$visitor_mail= $_POST['email'];

$subject=$_POST['subject'];

$message=$_POST['message'];
$email_from='abc@gmail.com';

$email_subject='New Form Submission';

$email_body="User Name:$name.\n".
            "User Email:  $visitor_mail.\n".
            "Subject: $subject_\n". 
            "User Message:$message.\n";

$to ='20311A12P7@SREENIDHI.EDU.IN';

$headers="From: $email_from \r\n";

$headers .="Replay-To:$visitor_mail \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html);
?>