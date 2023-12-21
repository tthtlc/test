<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
$query = "cat '". $tainted . "'";
//flaw
$ret = system($query);
?>