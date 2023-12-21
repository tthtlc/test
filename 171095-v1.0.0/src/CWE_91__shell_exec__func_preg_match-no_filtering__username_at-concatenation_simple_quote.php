<?php
/* 
Unsafe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : regular expression accepts everything
construction : concatenation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "//User[@username='". $tainted . "']";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>