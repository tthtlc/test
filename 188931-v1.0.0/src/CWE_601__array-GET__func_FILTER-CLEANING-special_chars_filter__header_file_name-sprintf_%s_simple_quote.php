<?php
/* 
Unsafe sample
input : get the $_GET['userData'] in an array
Uses a special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
//flaw
$var = header(sprintf("Location: '%s'.php", $tainted));
?>