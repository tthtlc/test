<!-- 
Safe sample
input : Get a serialize string in POST and unserialize it
sanitize : use of the function htmlentities. Sanitizes the query but has a high chance to produce unexpected results
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
    
$tainted = htmlentities($tainted, ENT_QUOTES);
echo $tainted ;
?>
</div>
<h1>Hello World!</h1>
</body>
</html>