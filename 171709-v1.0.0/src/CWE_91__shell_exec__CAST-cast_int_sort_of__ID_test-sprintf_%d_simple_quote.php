<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted += 0 ;
$query = sprintf("//User[@id='%d']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>