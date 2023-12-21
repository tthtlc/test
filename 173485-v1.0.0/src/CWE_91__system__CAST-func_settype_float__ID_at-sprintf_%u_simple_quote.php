<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : settype (float)
construction : use of sprintf via a %u with simple quote
*/
$tainted = system('ls', $retval);
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$query = sprintf("//User[@id='%u']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>