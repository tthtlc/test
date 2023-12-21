<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
Uses a magic_quotes_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$var = require(sprintf("'%s'.php", $tainted));
?>