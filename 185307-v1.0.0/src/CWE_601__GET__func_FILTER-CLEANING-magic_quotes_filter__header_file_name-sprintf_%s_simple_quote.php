<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a magic_quotes_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
//flaw
$var = header(sprintf("Location: '%s'.php", $tainted));
?>