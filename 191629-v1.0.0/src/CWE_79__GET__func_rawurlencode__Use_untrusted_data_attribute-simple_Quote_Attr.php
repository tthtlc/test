<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of rawurlencode
File : use of untrusted data in a simple quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_GET['UserData'];
$tainted = rawurlencode($tainted);
echo "<div id='".  $tainted ."'>content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>