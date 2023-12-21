<!-- 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast in float
File : unsafe, use of untrusted data in an attribute name
-->
<!DOCTYPE html>
<html>
<body>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = (float) $tainted ;
echo "<div ". $tainted ."= bob />" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>