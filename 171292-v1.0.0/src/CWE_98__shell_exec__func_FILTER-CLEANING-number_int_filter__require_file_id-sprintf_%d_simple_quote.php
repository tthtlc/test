<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a number_int_filter via filter_var function
construction : use of sprintf via a %d with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = require(sprintf("pages/'%d'.php", $tainted));
?>