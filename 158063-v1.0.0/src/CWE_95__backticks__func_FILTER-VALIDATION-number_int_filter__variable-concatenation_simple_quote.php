<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Flushes content of $sanitized if the filter number_int_filter is not applied
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>