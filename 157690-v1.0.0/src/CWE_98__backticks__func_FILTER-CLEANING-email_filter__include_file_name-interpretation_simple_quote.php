<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Uses an email_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = include("'$tainted'.php");
?>