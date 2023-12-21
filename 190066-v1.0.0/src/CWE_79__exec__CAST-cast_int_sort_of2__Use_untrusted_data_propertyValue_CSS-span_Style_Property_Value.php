<!-- 
Safe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : cast via + = 0
File : unsafe, use of untrusted data in a property value in a span tag(CSS)
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$script = "/tmp/tainted.php";
exec($script, $result, $return);
$tainted = $result[0];
$tainted = $tainted + 0;
echo "<span style=\"color :". checked_data ."\">Hey</span>" ;
?>
<h1>Hello World!</h1>
</body>
</html>