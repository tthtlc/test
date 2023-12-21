<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : check if there is only numbers
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "$temp = ' $tainted ';";
$res = eval($query);
?>