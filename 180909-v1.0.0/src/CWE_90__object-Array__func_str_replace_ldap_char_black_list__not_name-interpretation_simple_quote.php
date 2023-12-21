<?php
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
SANITIZE : use str_replace to escape special chars -
construction : interpretation with simple quote
*/
class Input{
  private $input;
  public function getInput(){
    return $this->input[1];
  }
  public  function __construct(){
    $this->input = array();
    $this->input[0]= 'safe' ;
    $this->input[1]= $_GET['UserData'] ;
    $this->input[2]= 'safe' ;
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
$query = "!name=' $tainted '";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>