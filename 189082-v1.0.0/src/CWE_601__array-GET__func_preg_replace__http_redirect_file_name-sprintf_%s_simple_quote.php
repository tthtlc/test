<?php
/* 
Unsafe sample
input : get the $_GET['userData'] in an array
SANITIZE : use of preg_replace
construction : use of sprintf via a %s with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
$var = http_redirect(sprintf("'%s'.php", $tainted));
?>