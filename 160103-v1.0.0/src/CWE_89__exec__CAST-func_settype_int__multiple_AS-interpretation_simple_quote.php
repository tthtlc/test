<?php
/* 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of settype_int
construction : interpretation with simple quote
*/
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
if (settype($tainted, "integer"))
  $tainted = $tainted ;
else
  $tainted = 0 ;
$query = "SELECT Trim(a.FirstName) & ' ' & Trim(a.LastName) AS employee_name, a.city, a.street & (' ' +a.housenum) AS address FROM Employees AS a  WHERE a.supervisor=' $tainted '";
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