<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
Flushes content of $sanitized if the filter number_int_filter is not applied
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>