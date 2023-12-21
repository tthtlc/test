<?php
/* 
Unsafe sample
input : get the $_GET['userData'] in an array
Flushes content of $sanitized if the filter email_filter is not applied
construction : interpretation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = http_redirect("'$tainted'.php");
?>