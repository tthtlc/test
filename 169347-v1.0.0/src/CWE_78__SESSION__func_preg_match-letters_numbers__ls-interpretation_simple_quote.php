<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
sanitize : check if there is only letters and/or numbers
construction : interpretation with simple quote
*/
$tainted = $_SESSION['UserData'];
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "ls ' $tainted '";
$ret = system($query);
?>