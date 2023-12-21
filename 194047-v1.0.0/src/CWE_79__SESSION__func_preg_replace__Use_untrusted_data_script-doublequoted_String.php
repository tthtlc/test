<!-- 
Unsafe sample
input : get the UserData field of $_SESSION
SANITIZE : use of preg_replace
File : use of untrusted data in a double quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
$tainted = preg_replace('/\'/', '', $tainted);
//flaw
echo "alert(\"". $tainted ."\")" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>