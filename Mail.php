<?php
require_once "Mail.php";

$from = "bsharma1@eagles.nccu.edu";
$to = 'bsharma1@eagles.nccu.edu';

$host = "ssl://smtp.gmail.com";
$port = "465";
$username = 'bsharma1@eagles.nccu.edu';
$password = 'T@mgh@s#321';

$subject = "Mail from PHP";
$body = "Mail from PHPMail from PHPMail from PHP";

$headers = array ('From' => $from, 'To' => $to,'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo($mail->getMessage());
} else {
echo("Message successfully sent!\n");
}
?>