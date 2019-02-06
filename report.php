<?php
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
//require 'ch01/final/aliens/vendor/autoupload.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
  <h2>Aliens Abducted Me - Report an Abduction</h2>

<?php
 $name = $_POST['firstname'] . ' ' . $_POST['lastname'];
 $when_it_happened = $_POST['whenithappened'];
 $how_long = $_POST['howlong'];
 $how_many = $_POST['howmany'];
 $alien_description = $_POST['aliendescription'];
 $what_they_did = $_POST['whattheydid'];
 $fang_spotted = $_POST['fangspotted'];
 $email = $_POST['email'];
 $other = $_POST['other'];

//$name = ($_POST['firstname']). ' ' . $_POST['lastname'];
//$whenithappened = isset($_POST['whenithappened']) ? $_POST['whenithappened'] : '';
//$howlong = isset($_POST['howlong']) ? $_POST['howlong'] : '';
//$howmany = isset($_POST['howmany']) ? $_POST['howmany'] : '';
//$aliendescription = isset($_POST['aliendescription']) ? $_POST['aliendescription'] : '';
//$whattheydid = isset($_POST['whattheydid']) ? $_POST['whattheydid'] : '';
//$fangspotted = isset($_POST['fangspotted']) ? $_POST['fangspotted'] : '';
//$email = isset($_POST['email']) ? $_POST['email'] : '';
//$other = isset($_POST['other']) ? $_POST['other'] : '';

  $to = $email;
  $subject = 'Aliens Abducted Me - Abduction Report';
  $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
    "Number of aliens: $how_many\n" .
    "Alien description: $alien_description\n" .
    "What they did: $what_they_did\n" .
    "Fang spotted: $fang_spotted\n" .
    "Other comments: $other";
  //mail($to, $subject, $msg, 'From:' . $email);

  $message = '';
  $message .= 'Thanks for submitting the form.<br />';
  $message .= 'You were abducted ' . $when_it_happened;
  $message .= ' and were gone for ' . $how_long . '<br />';
  $message .= 'Number of aliens: ' . $how_many . '<br />';
  $message .= 'Describe them: ' . $alien_description . '<br />';
  $message .= 'The aliens did this: ' . $what_they_did . '<br />';
  $message .= 'Was Fang there? ' . $fang_spotted . '<br />';
  $message .= 'Other comments: ' . $other . '<br />';
  $message .= 'Your email address is ' . $email;

echo $message;

?>



<?php


//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;



//Username to use for SMTP authentication - use full email address for gmail
//$mail->Username = "ibahhc@gmail.com";
//Password to use for SMTP authentication
//$mail->Password = "b9CZVPc@4N&47TWufUahZ2!jpTe!gm2Q";

$mail->Username = "bjayasharma@gmail.com";
//Password to use for SMTP authentication
$mail->Password = "JanuaryFebruary567";

//Set an alternative reply-to address
$mail->addReplyTo('bsharma1@eagles.nccu.edu', 'Bijaya Sharma');
//Set who the message is to be sent to
$mail->addAddress('bsharma1@eagles.nccu.edu', 'Bijaya Sharma');


//Set who the message is to be sent from
$mail->setFrom($to, $name);

//Set an alternative reply-to address
//$mail->addReplyTo($to, $name);
//Set who the message is to be sent to
$mail->addAddress($to, $name);
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->Body = $message;
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
}

?>

</body>
</html>

