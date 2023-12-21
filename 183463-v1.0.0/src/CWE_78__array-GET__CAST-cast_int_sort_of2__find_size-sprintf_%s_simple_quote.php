<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : cast via + = 0
construction : use of sprintf via a %s with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = $tainted + 0;
$query = sprintf("find / size '%d'", $tainted);
$ret = system($query);
?>