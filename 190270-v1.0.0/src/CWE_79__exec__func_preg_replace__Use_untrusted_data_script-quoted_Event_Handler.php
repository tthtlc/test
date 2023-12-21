<!-- 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
SANITIZE : use of preg_replace
File : use of untrusted data in a quoted event handler in a script
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = preg_replace('/\'/', '', $tainted);
echo "<div onmouseover=\"x='". $tainted ."'\>";
?>
<h1>Hello World!</h1>
</div>
</body>
</html>