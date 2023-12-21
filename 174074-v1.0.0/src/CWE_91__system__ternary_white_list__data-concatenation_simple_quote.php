<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : use of ternary condition
construction : concatenation with simple quote
*/
$tainted = system('ls', $retval);
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "'". $tainted . "'";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>