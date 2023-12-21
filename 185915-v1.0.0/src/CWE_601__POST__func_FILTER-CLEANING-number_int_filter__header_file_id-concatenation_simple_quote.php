<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
Uses a number_int_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = header("Location: pages/'". $tainted . "'.php");
?>