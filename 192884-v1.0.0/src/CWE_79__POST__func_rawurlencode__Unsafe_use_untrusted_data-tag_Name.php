<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
SANITIZE : use of rawurlencode
File : unsafe, use of untrusted data in an tag name
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_POST['UserData'];
$tainted = rawurlencode($tainted);
//flaw
echo "<".  $tainted ." href= \"/bob\" />" ;
?>
<h1>Hello World!</h1>
</body>
</html>