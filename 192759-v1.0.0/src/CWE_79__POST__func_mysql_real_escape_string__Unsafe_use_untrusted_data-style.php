<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of mysql_real_escape string
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_POST['UserData'];
$tainted = mysql_real_escape_string($tainted);
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>