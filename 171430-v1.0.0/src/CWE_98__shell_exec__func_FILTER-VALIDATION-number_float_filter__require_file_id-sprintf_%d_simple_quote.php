<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : use of sprintf via a %d with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = require(sprintf("pages/'%d'.php", $tainted));
?>