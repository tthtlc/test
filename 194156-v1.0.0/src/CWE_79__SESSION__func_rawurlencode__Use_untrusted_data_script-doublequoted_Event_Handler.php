<!-- 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : use of rawurlencode
File : use of untrusted data in a double quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_SESSION['UserData'];
$tainted = rawurlencode($tainted);
echo "<div onmouseover=\"x=\"". $tainted ."\"\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>