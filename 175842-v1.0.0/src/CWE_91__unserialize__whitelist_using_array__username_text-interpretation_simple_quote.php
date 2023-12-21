<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use in_array to check if $tainted is in the white list
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "//User[username/text()=' $tainted ']";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>