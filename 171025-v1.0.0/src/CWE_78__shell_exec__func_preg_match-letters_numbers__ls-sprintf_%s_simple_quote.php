<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : check if there is only letters and/or numbers
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$re = "/^[a-zA-Z0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = sprintf("ls '%s'", $tainted);
$ret = system($query);
?>