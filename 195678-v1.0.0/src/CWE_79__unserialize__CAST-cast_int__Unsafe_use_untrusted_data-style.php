<!-- 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : cast into int
File : unsafe, use of untrusted data in CSS
-->
<!DOCTYPE html>
<html>
<head>
<style>
<?php
$string = $_POST['UserData'] ;
$tainted = unserialize($string);
    
$tainted = (int) $tainted ;
echo $tainted ;
?>
</style>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>