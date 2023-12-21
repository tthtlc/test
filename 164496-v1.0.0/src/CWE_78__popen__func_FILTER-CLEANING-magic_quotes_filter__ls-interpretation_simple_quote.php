<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Uses a magic_quotes_filter via filter_var function
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$query = "ls ' $tainted '";
$ret = system($query);
?>