<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
Uses a special_chars_filter via filter_var function
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
      
$query = "cat '". $tainted . "'";
//flaw
$ret = system($query);
?>