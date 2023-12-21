<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of http_build_query
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$tainted = $_POST['UserData'];
$tainted = http_build_query($tainted);
//flaw
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>