<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
SANITIZE : use str_replace to escape special chars -
construction : interpretation with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
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