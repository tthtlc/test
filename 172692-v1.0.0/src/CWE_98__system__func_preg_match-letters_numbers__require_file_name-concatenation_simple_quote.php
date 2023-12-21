<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : check if there is only letters and/or numbers
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = require("'". $tainted . ".php'");
?>