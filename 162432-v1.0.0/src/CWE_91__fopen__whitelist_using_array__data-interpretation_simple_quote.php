<?php
/* 
Safe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
SANITIZE : use in_array to check if $tainted is in the white list
construction : interpretation with simple quote
*/
$handle = @fopen("/tmp/tainted.txt", "r");
if ($handle) {
  if(($tainted = fgets($handle, 4096)) == false) {
    $tainted = "";
  }
  fclose($handle);
} else {
  $tainted = "";
}
$legal_table = array("safe1", "safe2");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "' $tainted '";
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;
$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
?>