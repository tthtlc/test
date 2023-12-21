<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a full_special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
$var = header("'Location: " . $tainted ."'");
?>