<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
Flushes content of $sanitized if the filter email_filter is not applied
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = header("'Location: " . $tainted ."'");
?>