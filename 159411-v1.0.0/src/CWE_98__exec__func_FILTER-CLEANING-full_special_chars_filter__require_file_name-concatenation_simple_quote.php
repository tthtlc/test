<?php
/* 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
$var = require("'". $tainted . ".php'");
?>