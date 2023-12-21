<?php
/* 
Unsafe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : regular expression accepts everything
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = http_redirect("'" . $tainted . ".php'");
?>