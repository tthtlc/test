<?php
/* 
Safe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
SANITIZE : use str_replace to escape special chars -
construction : concatenation with simple quote
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
$replace_tab = array('\\'  = > '\5c',
  '*'  = > '\2a',
  '('  = > '\28',
  ')'  = > '\29',
  "\x00"  = > '\00');
$tainted = str_replace(array_keys($replace_tab),array_values($replace_tab),$tainted);
$query = "(&(objectCategory=person)(objectClass=user)(mail='". $tainted . "'))";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>