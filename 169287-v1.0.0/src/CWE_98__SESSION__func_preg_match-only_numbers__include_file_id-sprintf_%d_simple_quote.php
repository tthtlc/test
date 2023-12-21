<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : check if there is only numbers
construction : use of sprintf via a %d with simple quote
*/
$tainted = $_SESSION['UserData'];
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = include(sprintf("pages/'%d'.php", $tainted));
?>