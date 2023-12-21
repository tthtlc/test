<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Uses a number_float_filter via filter_var function
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_FLOAT);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = require("pages/'$tainted'.php");
?>