<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : cast in float
construction : interpretation with simple quote
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$tainted = (float) $tainted ;
$query = "$temp = ' $tainted ';";
$res = eval($query);
?>