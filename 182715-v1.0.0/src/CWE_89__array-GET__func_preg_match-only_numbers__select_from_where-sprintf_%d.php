<?php
/* 
Safe sample
input : get the $_GET['userData'] in an array
sanitize : check if there is only numbers
construction : use of sprintf via a %d
*/
$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$tainted = $array[1] ;
$re = "/^[0-9]*$/";
if(preg_match($re, $tainted) == 1){
  $tainted = $tainted;
}
else{
  $tainted = "";
}
$query = sprintf("SELECT * FROM student where id=%d", $tainted);
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