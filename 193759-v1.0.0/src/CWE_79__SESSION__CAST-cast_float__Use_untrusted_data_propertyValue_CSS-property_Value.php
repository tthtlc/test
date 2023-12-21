<!-- 
Safe sample
input : get the UserData field of $_SESSION
sanitize : cast in float
File : use of untrusted data in a property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = $_SESSION['UserData'];
$tainted = (float) $tainted ;
echo "body { color :". $tainted ." ; }" ;
?>
 </style> 
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>