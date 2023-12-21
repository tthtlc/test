<?php
/* 
Unsafe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
Uses an email_filter via filter_var function
construction : interpretation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "cat ' $tainted '";
//flaw
$ret = system($query);
?>