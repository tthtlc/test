<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
Uses a number_int_filter via filter_var function
construction : interpretation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "find / size ' $tainted '";
$ret = system($query);
?>