<?php
/* 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : settype (float)
construction : concatenation with simple quote
*/
$tainted = $_GET['UserData'];
if(settype($tainted, "float"))
  $tainted = $tainted ;
else
  $tainted = 0.0 ;
$query = "SELECT Trim(a.FirstName) & ' ' & Trim(a.LastName) AS employee_name, a.city, a.street & (' ' +a.housenum) AS address FROM Employees AS a  WHERE a.supervisor='". $tainted . "'";
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