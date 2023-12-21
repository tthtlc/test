<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
Flushes content of $sanitized if the filter email_filter is not applied
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
$var = http_redirect("'" . $tainted . "'");
?>