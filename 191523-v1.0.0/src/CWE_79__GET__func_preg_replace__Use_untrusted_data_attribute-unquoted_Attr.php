<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
SANITIZE : use of preg_replace
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$tainted = $_GET['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>