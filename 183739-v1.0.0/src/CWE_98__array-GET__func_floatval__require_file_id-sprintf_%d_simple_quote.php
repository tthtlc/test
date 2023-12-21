<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : use of floatval
construction : use of sprintf via a %d with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = floatval($tainted);
$var = require(sprintf("pages/'%d'.php", $tainted));
?>