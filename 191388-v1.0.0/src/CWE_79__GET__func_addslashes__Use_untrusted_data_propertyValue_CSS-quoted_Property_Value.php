<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : use of the function addslashes
File : unsafe, use of untrusted data in a quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_GET['UserData'];
$tainted = addslashes($tainted);
//flaw
echo "body { color :\'". $tainted ."\' ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>