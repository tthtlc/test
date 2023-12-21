<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
Flushes content of $sanitized if the filter number_int_filter is not applied
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = include("pages/'". $tainted . "'.php");
?>