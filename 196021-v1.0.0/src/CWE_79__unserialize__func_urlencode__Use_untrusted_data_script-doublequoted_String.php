<!-- 
Safe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of urlencode
File : use of untrusted data in a double quoted string in a script
-->
<!DOCTYPE html>
<html>
<head>
<script>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = urlencode($tainted);
echo "alert(\"". $tainted ."\")" ;
?>
</script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>