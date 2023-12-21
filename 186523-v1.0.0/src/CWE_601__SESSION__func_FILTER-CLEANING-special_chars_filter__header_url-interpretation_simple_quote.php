<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
Uses a special_chars_filter via filter_var function
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
//flaw
$var = header("location: '$tainted'");
?>