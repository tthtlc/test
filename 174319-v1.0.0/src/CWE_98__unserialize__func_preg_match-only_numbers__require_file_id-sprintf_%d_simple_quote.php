<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : check if there is only numbers
construction : use of sprintf via a %d with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = require(sprintf("pages/'%d'.php", $tainted));
?>