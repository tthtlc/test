<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of preg_replace with another regex
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = preg_replace('/\W/si','',$tainted);
$query = "(&(objectCategory=person)(objectClass=user)(mail=' $tainted '))";
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>