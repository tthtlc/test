<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : regular expression accepts everything
construction : use of sprintf via a %s with simple quote
*/
$tainted = $_GET['UserData'];
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = header(sprintf("Location: '%s'.php", $tainted));
?>