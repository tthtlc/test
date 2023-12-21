<!-- 
Unsafe sample
input : backticks interpretation, reading the file /tmp/tainted.txt
sanitize : none
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = `cat /tmp/tainted.txt`;
//no_sanitizing
//flaw
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>