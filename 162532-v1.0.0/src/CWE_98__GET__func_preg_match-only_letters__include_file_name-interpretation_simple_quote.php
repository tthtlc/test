<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : check if there is only letters
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$re = "/^[a-zA-Z]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$var = include("'$tainted'.php");
?>