<?php
/* 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
SANITIZE : use of mysql_real_escape string
construction : use of sprintf via a %u with simple quote
*/
$tainted = system('ls', $retval);
$tainted = mysql_real_escape_string($tainted);
$query = sprintf("SELECT * FROM student where id='%u'", $tainted);
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