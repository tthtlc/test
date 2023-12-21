<?php
/* 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = $_POST['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "ls '". $tainted . "'";
$ret = system($query);
?>