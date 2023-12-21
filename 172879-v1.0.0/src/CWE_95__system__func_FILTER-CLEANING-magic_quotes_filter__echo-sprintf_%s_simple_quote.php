<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
Uses a magic_quotes_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
$query = sprintf("echo $'%s';", $tainted);
$res = eval($query);
?>