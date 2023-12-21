<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
Uses a special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
//flaw
$var = header("'Location: " . $tainted .".php'");
?>