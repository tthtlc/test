<?php
/* 
Unsafe sample
input : get the $_GET['userData'] in an array
sanitize : none
construction : use of sprintf via a %d with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
//no_sanitizing
//flaw
$var = include(sprintf("pages/'%d'.php", $tainted));
?>