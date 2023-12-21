<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
Flushes content of $sanitized if the filter number_int_filter is not applied
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = include("pages/'". $tainted . "'.php");
?>