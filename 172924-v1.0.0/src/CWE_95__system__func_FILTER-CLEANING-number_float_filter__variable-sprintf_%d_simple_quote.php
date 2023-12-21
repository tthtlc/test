<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
Uses a number_float_filter via filter_var function
construction : use of sprintf via a %d with simple quote
*/
$tainted = system('ls', $retval);
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = sprintf("$temp = '%d';", $tainted);
$res = eval($query);
?>