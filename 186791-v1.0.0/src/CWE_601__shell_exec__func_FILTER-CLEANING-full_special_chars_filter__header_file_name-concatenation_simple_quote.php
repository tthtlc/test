<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
$var = header("'Location: " . $tainted .".php'");
?>