<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of mysql_real_escape string
construction : interpretation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = mysql_real_escape_string($tainted);
$query = "//User[@id=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>