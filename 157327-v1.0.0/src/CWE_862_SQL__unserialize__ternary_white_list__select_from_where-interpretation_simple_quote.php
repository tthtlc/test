<?php
/*
/* 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of ternary condition
construction : interpretation with simple quote
*/
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
$query = "SELECT * FROM student where id=' $tainted '";
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $checked_data);
$stmt->execute();
mysql_close($conn);
 ?>