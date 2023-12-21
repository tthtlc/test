<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : concatenation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = http_redirect("pages/'". $tainted . "'.php");
?>