<!-- 
Unsafe sample
input : Get a serialize string in POST and unserialize it
SANITIZE : use of http_build_query
File : use of untrusted data in a unquoted attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = http_build_query($tainted);
//flaw
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>