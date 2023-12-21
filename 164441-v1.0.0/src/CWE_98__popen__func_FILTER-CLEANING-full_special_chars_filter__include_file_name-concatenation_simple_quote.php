<?php
/* 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
$var = include("'". $tainted . ".php'");
?>