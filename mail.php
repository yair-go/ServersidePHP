<?php

$mailto = $_REQUEST["mailto"];
$subject = $_REQUEST["subject"];
 
$from = "From: yair@yair.com";

// The message
$message = "Hello mail";

$mailto = $mailto ? $mailto : "irigo1@gmail.com";
$subject = $subject ? $subject :"My Subject"; 

// In case any of our lines are larger than 70 characters, we should use wordwrap()
//$message = wordwrap($message, 70, "\r\n");

// Send
$mail_ok=@mail($mailto, $subject, $message,$from);
 if ($mail_ok)
     {
        echo "<P><B>האי-מייל נשלח בהצלחה!</B></P>";
     }

?>


