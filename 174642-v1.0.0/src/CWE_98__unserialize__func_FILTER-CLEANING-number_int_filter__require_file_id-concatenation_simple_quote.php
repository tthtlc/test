<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
Uses a number_int_filter via filter_var function
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$sanitized = filter_var($tainted, FILTER_SANITIZE_NUMBER_INT);
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = require("pages/'". $tainted . "'.php");
?>