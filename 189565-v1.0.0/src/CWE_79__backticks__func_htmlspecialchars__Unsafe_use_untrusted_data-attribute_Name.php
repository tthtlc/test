<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>