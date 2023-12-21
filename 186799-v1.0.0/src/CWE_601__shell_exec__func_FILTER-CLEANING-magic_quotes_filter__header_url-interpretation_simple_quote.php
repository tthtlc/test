<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses a magic_quotes_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
//flaw
$var = header("location: '$tainted'");
?>