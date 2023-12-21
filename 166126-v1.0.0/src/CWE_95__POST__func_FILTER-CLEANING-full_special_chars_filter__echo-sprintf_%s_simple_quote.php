<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
Uses a full_special_chars_filter via filter_var function
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_POST['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
$query = sprintf("echo $'%s';", $tainted);
//flaw
$res = eval($query);
?>