<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : use of intval
construction : use of sprintf via a %s with simple quote
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted = intval($tainted);
$query = sprintf("SELECT * FROM student where id='%s'", $tainted);
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