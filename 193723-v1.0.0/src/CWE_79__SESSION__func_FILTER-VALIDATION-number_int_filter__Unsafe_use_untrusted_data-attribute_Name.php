<!-- 
Unsafe sample
input : get the UserData field of $_SESSION
Flushes content of $sanitized if the filter number_int_filter is not applied
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$tainted = $_SESSION['UserData'];
if (filter_var($sanitized, FILTER_VALIDATE_INT))
  $tainted = $sanitized ;
else
  $tainted = "" ;
//flaw
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>