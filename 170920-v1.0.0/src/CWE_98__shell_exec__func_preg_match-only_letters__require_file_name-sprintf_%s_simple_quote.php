<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : check if there is only letters
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$re = "/^[a-zA-Z]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = require(sprintf("'%s'.php", $tainted));
?>