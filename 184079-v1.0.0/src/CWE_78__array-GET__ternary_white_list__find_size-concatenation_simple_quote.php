<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>