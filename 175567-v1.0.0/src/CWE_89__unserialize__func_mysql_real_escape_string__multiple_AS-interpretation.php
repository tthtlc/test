<?php
/* 
Unsafe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of mysql_real_escape string
construction : interpretation
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = mysql_real_escape_string($tainted);
$query = "SELECT Trim(a.FirstName) & ' ' & Trim(a.LastName) AS employee_name, a.city, a.street & (' ' +a.housenum) AS address FROM Employees AS a  WHERE a.supervisor= $tainted ";
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