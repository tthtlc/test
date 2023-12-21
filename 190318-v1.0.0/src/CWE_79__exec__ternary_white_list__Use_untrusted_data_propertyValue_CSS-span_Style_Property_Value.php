<!-- 
Unsafe sample
input : use exec to execute the script /tmp/tainted.php and store the output in $tainted
sanitize : use of ternary condition
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
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
//flaw
echo "<span style=\"color :". checked_data ."\">Hey</span>" ;
?>
<h1>Hello World!</h1>
</body>
</html>