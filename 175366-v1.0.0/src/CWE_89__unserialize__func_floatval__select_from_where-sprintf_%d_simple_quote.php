<?php
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of floatval
construction : use of sprintf via a %d with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = floatval($tainted);
$query = sprintf("SELECT * FROM student where id='%d'", $tainted);
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