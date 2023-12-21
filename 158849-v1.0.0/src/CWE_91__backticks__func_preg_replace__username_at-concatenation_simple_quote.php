<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
SANITIZE : use of preg_replace
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = preg_replace('/\'/', '', $tainted);
$query = "//User[@username='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>