<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of rawurlencode
File : use of untrusted data in a simple quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_GET['UserData'];
$tainted = rawurlencode($tainted);
echo "alert('". $tainted ."')" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>