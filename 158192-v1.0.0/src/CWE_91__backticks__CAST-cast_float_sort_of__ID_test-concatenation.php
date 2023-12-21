<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : cast via + = 0.0
construction : concatenation
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted += 0.0 ;
$query = "//User[@id=". $tainted . "]";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>