<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : none
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
//no_sanitizing
$query = sprintf("//User[@id='%s']", $tainted);
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>