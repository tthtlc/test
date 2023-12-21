<?php
/*
/* 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = `cat /tmp/tainted.txt`;
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "//User[@username='". $tainted . "']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>