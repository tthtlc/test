<?php
/* 
Safe sample
input : use shell_exec to cat /tmp/tainted.txt
sanitize : cast via + = 0.0
construction : concatenation
*/
$tainted = shell_exec('cat /tmp/tainted.txt');
$tainted += 0.0 ;
$query = "SELECT * FROM COURSE c WHERE c.id IN (SELECT idcourse FROM REGISTRATION WHERE idstudent=". $tainted . ")";
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