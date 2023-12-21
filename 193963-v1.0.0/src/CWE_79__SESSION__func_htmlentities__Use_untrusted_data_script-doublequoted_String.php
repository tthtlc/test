<!-- 
Safe sample
input : get the UserData field of $_SESSION
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
File : use of untrusted data in a double quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
$tainted = htmlentities($tainted, ENT_QUOTES);
echo "alert(\"". $tainted ."\")" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>