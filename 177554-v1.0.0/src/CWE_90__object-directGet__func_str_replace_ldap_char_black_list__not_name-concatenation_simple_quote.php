<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
SANITIZE : use str_replace to escape special chars -
construction : concatenation with simple quote
*/
class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();
$replace_tab = array('\\'  = > '\5c',
  '*'  = > '\2a',
  '('  = > '\28',
  ')'  = > '\29',
  "\x00"  = > '\00');
$tainted = str_replace(array_keys($replace_tab),array_values($replace_tab),$tainted);
$query = "!name='". $tainted . "'";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>