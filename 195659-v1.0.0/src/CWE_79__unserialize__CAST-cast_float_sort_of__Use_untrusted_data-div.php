<!-- 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast via + = 0.0
File : use of untrusted data in a div tag
-->
<!DOCTYPE html>
<html>
<head/>
<body>
<div>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted += 0.0 ;
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>