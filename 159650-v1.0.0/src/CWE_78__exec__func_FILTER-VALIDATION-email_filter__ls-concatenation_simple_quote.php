<?php
/* 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
Flushes content of $sanitized if the filter email_filter is not applied
construction : concatenation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "ls '". $tainted . "'";
//flaw
$ret = system($query);
?>