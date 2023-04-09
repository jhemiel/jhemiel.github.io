<?php
$to = $_POST['email'];
$subject = "Email from Portfolio Site";
         
$message = $_POST['message'];
         
$headers[] = "From: jhemiel@github.io";
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';
         
$retval = mail ($to,$subject,$message,implode("\r\n", $headers));
         
if( $retval == true ) {
    echo "Message sent successfully...";
}else {
    echo "Message could not be sent...";
}

die();