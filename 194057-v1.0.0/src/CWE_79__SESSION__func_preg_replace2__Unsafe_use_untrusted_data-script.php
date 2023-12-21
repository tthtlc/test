<!-- 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace with another regex
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\W/si','',$tainted);
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>