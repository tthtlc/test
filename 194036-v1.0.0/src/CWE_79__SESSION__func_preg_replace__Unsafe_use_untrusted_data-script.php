<!-- 
Unsafe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace
File : unsafe, use of untrusted data in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo $tainted ;
?>
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>