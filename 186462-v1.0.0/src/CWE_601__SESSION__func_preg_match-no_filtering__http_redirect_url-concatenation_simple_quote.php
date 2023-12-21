<?php
/* 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : regular expression accepts everything
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = http_redirect("'" . $tainted . "'");
?>