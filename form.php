<?php
$to="ukronaldo1234@gmail.com";
$subject="message from website - mattress corner";
$message="Name:".$_POST["uname"]."\n";
$message="Phone:".$_POST["Phone"]."\n";
$message="Mail:".$_POST["Mail"]."\n";
$message="Message:".$_POST["Message"]."\n";
$headers="From: matresscornercbe@gmail.com";
mail($to,$subject,$message,$headers);
header("Location:index.html");
?>