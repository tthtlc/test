<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
Uses an email_filter via filter_var function
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = include("'". $tainted . ".php'");
?>