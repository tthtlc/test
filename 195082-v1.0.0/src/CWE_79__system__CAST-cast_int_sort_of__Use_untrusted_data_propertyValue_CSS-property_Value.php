<!-- 
Safe sample
input : execute a ls command using the function system, and put the last result in $tainted
sanitize : cast via + = 0
File : use of untrusted data in a property value (CSS)
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$tainted = system('ls', $retval);
$tainted += 0 ;
echo "body { color :". $tainted ." ; }" ;
?>
 </style> 
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>