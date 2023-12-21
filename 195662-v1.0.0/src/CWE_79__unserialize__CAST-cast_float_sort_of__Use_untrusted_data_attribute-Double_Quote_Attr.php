<!-- 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast via + = 0.0
File : use of untrusted data in a doubled quote attribute
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted += 0.0 ;
echo "<div id=\"". $tainted ."\">content</div>" ;
?>
<h1>Hello World!</h1>
</body>
</html>