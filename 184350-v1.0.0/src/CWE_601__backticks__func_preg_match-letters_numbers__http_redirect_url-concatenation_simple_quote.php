<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : check if there is only letters and/or numbers
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = http_redirect("'" . $tainted . "'");
?>