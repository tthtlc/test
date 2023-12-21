<!-- 
Safe sample
input : reads the field UserData from the variable $_GET
sanitize : use of intval
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$tainted = $_GET['UserData'];
$tainted = intval($tainted);
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>