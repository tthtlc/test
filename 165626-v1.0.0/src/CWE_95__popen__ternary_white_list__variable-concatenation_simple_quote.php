<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "$temp = '". $tainted . "';";
$res = eval($query);
?>