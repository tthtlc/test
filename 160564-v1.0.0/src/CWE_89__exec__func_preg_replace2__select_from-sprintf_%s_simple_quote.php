<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
SANITIZE : use of preg_replace with another regex
construction : use of sprintf via a %s with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = preg_replace('/\W/si','',$tainted);
$query = sprintf("SELECT * FROM '%s'", $tainted);
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