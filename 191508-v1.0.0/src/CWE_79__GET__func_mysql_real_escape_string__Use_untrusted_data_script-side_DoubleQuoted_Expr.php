<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of mysql_real_escape string
File : use of untrusted data in one side of a double quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_GET['UserData'];
$tainted = mysql_real_escape_string($tainted);
//flaw
echo "x=\"". $tainted."\"" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>