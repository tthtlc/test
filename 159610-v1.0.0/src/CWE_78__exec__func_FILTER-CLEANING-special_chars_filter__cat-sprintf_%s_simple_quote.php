<?php
/* 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
Uses a special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = sprintf("cat '%s'", $tainted);
//flaw
$ret = system($query);
?>