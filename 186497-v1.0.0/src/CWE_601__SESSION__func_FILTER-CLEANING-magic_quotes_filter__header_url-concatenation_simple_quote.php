<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
Uses a magic_quotes_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_MAGIC_QUOTES);
  $tainted = $sanitized ;
      
//flaw
$var = header("'Location: " . $tainted ."'");
?>