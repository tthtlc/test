<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of ternary condition
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "name=' $tainted '";
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>