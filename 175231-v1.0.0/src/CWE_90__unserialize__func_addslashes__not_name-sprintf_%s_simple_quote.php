<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of the function addslashes
construction : use of sprintf via a %s with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = addslashes($tainted);
$query = sprintf("!name='%s'", $tainted);
//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);
?>