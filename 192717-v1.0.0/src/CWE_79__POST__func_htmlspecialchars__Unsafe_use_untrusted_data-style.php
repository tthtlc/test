<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : use of the function htmlspecialchars. Sanitizes the query but has a high chance to produce unexpected results
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_POST['UserData'];
$tainted = htmlspecialchars($tainted, ENT_QUOTES);
//flaw
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>