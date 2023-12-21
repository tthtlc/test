<!-- 
Unsafe sample
input : get the UserData field of $_SESSION
sanitize : none
File : use of untrusted data in one side of a double quoted expression in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
//no_sanitizing
//flaw
echo "x=\"". $tainted."\"" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>