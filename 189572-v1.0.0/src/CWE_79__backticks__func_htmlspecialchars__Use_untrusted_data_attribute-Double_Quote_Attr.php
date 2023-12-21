<!-- 
Safe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>