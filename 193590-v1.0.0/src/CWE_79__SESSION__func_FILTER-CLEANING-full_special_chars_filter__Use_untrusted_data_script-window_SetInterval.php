<!-- 
Unsafe sample
input : get the UserData field of $_SESSION
Uses a full_special_chars_filter via filter_var function
File : unsafe, use of untrusted data in the function setInterval
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$tainted = $_SESSION['UserData'];
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $tainted = $sanitized ;
     
//flaw
echo "window.setInterval('". $tainted ."');" ;
?>
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>