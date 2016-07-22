<?php

// todo ensure this happens on a post request

$to = "matthew@matthewheimark.com";
$subject = "Website contact";
$message = "First email test";
$headers = 'From: matthew@matthewheimark.com';

$success = mail($to, $subject, $message, $headers);

?>
