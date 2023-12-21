<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : check if there is only letters and/or numbers
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
//flaw
$var = header("location: '$tainted'");
?>