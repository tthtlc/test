<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : check if there is only numbers
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "find / size '". $tainted . "'";
$ret = system($query);
?>