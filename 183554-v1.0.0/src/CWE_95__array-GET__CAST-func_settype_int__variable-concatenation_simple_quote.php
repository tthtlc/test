<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : use of settype_int
construction : concatenation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>