<?php
$name =  $_P['name'];
$visitor_email =  $_P['email'];
$favorite=  $_P['favorite'];
$reason =  $_P['reason'];

$email_from = 'bookguide@website.com';
$email_subject = 'Your-Book Guide';
$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "User Favorite: $favorite.\n".
              "User Reason: $reason.\n";

$to = 'dangvanshita@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>

