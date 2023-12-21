<!-- 
Safe sample
input : get the UserData field of $_SESSION
SANITIZE : use of rawurlencode
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_SESSION['UserData'];
$tainted = rawurlencode($tainted);
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>