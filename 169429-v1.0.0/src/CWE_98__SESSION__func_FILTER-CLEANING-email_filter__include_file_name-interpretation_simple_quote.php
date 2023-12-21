<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
Uses an email_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = include("'$tainted'.php");
?>