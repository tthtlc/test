<?php
/* 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : use in_array to check if $tainted is in the white list
construction : concatenation with simple quote
*/
$tainted = $_SESSION['UserData'];
$legal_table = array("users", "connexions");
if (in_array($tainted, $legal_table, true)) {
  $tainted = $tainted;
} else {
  $tainted = $legal_table[0];
}
$query = "SELECT * FROM '". $tainted . "'";
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