<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
Flushes content of $sanitized if the filter number_float_filter is not applied
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_POST['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_FLOAT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = include(sprintf("pages/'%d'.php", $tainted));
?>