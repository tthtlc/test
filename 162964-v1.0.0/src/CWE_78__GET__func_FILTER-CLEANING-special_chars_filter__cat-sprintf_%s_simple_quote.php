<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
Uses a special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = sprintf("cat '%s'", $tainted);
//flaw
$ret = system($query);
?>