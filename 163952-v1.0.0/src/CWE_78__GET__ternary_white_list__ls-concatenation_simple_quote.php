<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "ls '". $tainted . "'";
$ret = system($query);
?>