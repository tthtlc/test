<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace with another regex
File : use of untrusted data in a double quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
echo "alert(\"". $tainted ."\")" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>