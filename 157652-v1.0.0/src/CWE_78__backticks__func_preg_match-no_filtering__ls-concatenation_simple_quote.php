<?php
/* 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : regular expression accepts everything
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "ls '". $tainted . "'";
//flaw
$ret = system($query);
?>