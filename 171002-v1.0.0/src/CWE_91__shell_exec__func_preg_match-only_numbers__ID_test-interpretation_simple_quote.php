<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : check if there is only numbers
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "//User[@id=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>