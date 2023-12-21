<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0.0
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$tainted += 0.0 ;
$var = include("pages/'". $tainted . "'.php");
?>