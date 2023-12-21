<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Flushes content of $sanitized if the filter email_filter is not applied
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = http_redirect(sprintf("'%s'", $tainted));
?>