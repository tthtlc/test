<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a number_float_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "$temp = ' $tainted ';";
$res = eval($query);
?>