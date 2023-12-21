<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : cast via + = 0.0
construction : use of sprintf via a %d with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted += 0.0 ;
$var = include(sprintf("pages/'%d'.php", $tainted));
?>