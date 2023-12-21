<?php
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of floatval
construction : concatenation
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = floatval($tainted);
$query = "//User[@id=". $tainted . "]";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>