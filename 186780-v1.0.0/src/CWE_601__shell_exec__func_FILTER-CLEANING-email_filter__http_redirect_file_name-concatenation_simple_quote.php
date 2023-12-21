<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
Uses an email_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = http_redirect("'" . $tainted . ".php'");
?>