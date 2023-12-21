<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : check if there is only numbers
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = require("pages/'$tainted'.php");
?>