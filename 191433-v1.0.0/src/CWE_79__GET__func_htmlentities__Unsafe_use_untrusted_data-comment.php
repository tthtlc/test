<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in a comment
-->
<!DOCTYPE html>
<html>
<head>
<!--
<?php
$tainted = $_GET['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
//flaw
echo $tainted ;
?>
-->
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>