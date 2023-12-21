<?php
/* 
Unsafe sample
input : get the $_GET['userData'] in an array
Uses an email_filter via filter_var function
construction : concatenation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "cat '". $tainted . "'";
//flaw
$ret = system($query);
?>