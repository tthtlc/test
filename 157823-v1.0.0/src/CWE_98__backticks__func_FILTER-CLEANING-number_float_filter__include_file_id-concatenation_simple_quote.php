<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Uses a number_float_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = include("pages/'". $tainted . "'.php");
?>