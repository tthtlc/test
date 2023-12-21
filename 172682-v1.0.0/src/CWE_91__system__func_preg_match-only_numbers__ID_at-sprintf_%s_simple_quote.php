<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : check if there is only numbers
construction : use of sprintf via a %s with simple quote
*/
$tainted = system('ls', $retval);
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = sprintf("//User[@id='%s']", $tainted);
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>