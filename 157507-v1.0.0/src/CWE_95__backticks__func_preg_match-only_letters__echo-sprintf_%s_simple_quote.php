<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : check if there is only letters
construction : use of sprintf via a %s with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$re = "/^[a-zA-Z]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = sprintf("echo $'%s';", $tainted);
$res = eval($query);
?>