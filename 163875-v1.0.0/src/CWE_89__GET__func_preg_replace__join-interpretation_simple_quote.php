<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace
construction : interpretation with simple quote
*/
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
$query = "SELECT lastname, firstname FROM drivers, vehicles WHERE drivers.id = vehicles.ownerid AND vehicles.tag=' $tainted '";
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