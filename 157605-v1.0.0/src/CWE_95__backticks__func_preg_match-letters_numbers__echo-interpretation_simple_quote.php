<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : check if there is only letters and/or numbers
construction : interpretation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "echo $'$tainted';";
$res = eval($query);
?>