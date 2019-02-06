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
//$name = $_POST['firstname'] . ' ' . $_POST['lastname'];
//$when_it_happened = $_POST['whenithappened'];
//$how_long = $_POST['howlong'];
//$alien_description = $_POST['description'];
//$fang_spotted = $_POST['fangspotted'];
//$email = $_POST['email'];

$name = isset($_POST['name']) ? $_POST['name'] : '';
$whenithappened = isset($_POST['whenithappened']) ? $_POST['whenithappened'] : '';
$howlong = isset($_POST['howlong']) ? $_POST['howlong'] : '';
$aliendescription = isset($_POST['aliendescription']) ? $_POST['aliendescription'] : '';
$fangspotted = isset($_POST['fangspotted']) ? $_POST['fangspotted'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';

$to = 'bsharma1@eagles.nccu.edu';
$subject = 'Aliens Abducted Me - Abduction Report';
$msg = "$name was abducted $whenithappened and was gone for $howlong.\n" .
   "Alien description: $aliendescription\n" .
  "Fang spotted: $fangspotted\n" .

mail($to, $subject,'From:' . $email);

echo 'Thanks for submitting the form.<br />';
echo 'You were abducted ' . $whenithappened;
echo ' and were gone for ' . $howlong . '<br />';
echo 'Describe them: ' . $aliendescription . '<br />';
echo 'Was Fang there? ' . $fangspotted . '<br />';
echo 'Your email address is ' . $email;
?>

</body>
</html>

