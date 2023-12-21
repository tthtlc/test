<?php
/* 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : regular expression accepts everything
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
$re = "/^.*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = "'". $tainted . "'";
//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>