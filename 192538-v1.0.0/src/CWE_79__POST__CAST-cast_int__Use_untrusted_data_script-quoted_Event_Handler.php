<!-- 
Safe sample
input : get the field UserData from the variable $_POST
sanitize : cast into int
File : use of untrusted data in a quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_POST['UserData'];
$tainted = (int) $tainted ;
echo "<div onmouseover=\"x='". $tainted ."'\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>