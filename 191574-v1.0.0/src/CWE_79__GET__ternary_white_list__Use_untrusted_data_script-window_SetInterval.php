<!-- 
Unsafe sample
input : reads the field UserData from the variable $_GET
sanitize : use of ternary condition
File : unsafe, use of untrusted data in the function setInterval
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_GET['UserData'];
$tainted = $tainted  == 'safe1' ? 'safe1' : 'safe2';
//flaw
echo "window.setInterval('". $tainted ."');" ;
?>
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>