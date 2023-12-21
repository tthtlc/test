<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast in float
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_GET['UserData'];
$tainted = (float) $tainted ;
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>