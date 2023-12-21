<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast via + = 0.0
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted += 0.0 ;
$query = "//User[@id='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>