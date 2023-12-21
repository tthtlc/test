<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
Uses an email_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = sprintf("cat '%s'", $tainted);
//flaw
$ret = system($query);
?>