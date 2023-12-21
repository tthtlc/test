<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
Uses a magic_quotes_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
//flaw
$var = http_redirect(sprintf("'%s'", $tainted));
?>