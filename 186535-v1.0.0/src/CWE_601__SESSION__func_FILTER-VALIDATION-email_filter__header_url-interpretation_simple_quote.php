<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
Flushes content of $sanitized if the filter email_filter is not applied
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = header("location: '$tainted'");
?>