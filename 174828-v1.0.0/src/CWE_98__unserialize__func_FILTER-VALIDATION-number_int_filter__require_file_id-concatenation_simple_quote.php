<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
Flushes content of $sanitized if the filter number_int_filter is not applied
construction : concatenation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
$var = require("pages/'". $tainted . "'.php");
?>