<?php
/* 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : none
construction : interpretation with simple quote
*/
$tainted = $_POST['UserData'];
//no_sanitizing
$query = "SELECT * FROM ' $tainted '";
//flaw
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); // Connection to the database (address, user, password)
mysql_select_db('dbname') ;
echo "query : ". $query ."<br /><br />" ;
$res = mysql_query($query); //execution
while($data =mysql_fetch_array($res)){
print_r($data) ;
echo "<br />" ;
} 
mysql_close($conn);
?>