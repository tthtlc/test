<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace
File : use of untrusted data in a double quoted property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo "body { color :\"". $tainted ."\" ; }" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>