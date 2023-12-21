<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = preg_replace('/\'/', '', $tainted);
$query = "//User[@username=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>