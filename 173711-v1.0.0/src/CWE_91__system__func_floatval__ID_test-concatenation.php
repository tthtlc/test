<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of floatval
construction : concatenation
*/
$tainted = system('ls', $retval);
$tainted = floatval($tainted);
$query = "//User[@id=". $tainted . "]";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>