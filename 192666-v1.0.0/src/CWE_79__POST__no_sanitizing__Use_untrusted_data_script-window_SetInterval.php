<!-- 
Unsafe sample
input : get the field UserData from the variable $_POST
sanitize : none
File : unsafe, use of untrusted data in the function setInterval
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_POST['UserData'];
//no_sanitizing
//flaw
echo "window.setInterval('". $tainted ."');" ;
?>
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>