<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : cast in float
File : use of untrusted data in a quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_GET['UserData'];
$tainted = (float) $tainted ;
echo "<div onmouseover=\"x='". $tainted ."'\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>