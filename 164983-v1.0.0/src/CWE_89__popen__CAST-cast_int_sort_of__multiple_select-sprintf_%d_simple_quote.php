<?php
/* 
Safe sample
input : Uses popen to read the file /tmp/tainted.txt using cat command
sanitize : cast via + = 0
construction : use of sprintf via a %d with simple quote
*/
$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$tainted = fread($handle, 4096);
pclose($handle);
$tainted += 0 ;
$query = sprintf("SELECT * FROM COURSE c WHERE c.id IN (SELECT idcourse FROM REGISTRATION WHERE idstudent='%d')", $tainted);
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