<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast into int
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = (int) $tainted ;
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>