<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
Uses a number_float_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "find / size ' $tainted '";
$ret = system($query);
?>