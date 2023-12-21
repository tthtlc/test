<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
Uses a magic_quotes_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$var = include("'". $tainted . ".php'");
?>