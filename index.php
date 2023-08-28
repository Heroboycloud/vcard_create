<?php
header( "Content-type:text/x-vCard" );

$first = $_GET["first_name"];
$last = $_GET["last_name"];
$email = $_GET["email"];
?>

BEGIN:VCARD
VERSION:2.1
N:<?php echo($last); ?>;<?php echo($first); ?> 
FN:<?php echo($first); ?> <?php echo($last); ?> 
EMAIL;PREF;INTERNET:<?php echo($email); ?> 
REV:20050626T024452Z 
END:VCARD
