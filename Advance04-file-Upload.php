<!DOCTYPE html>
<html>
<body>
<form action="Advanced03-file.php" method="post" enctype="multipart/form-data">
<p>Browse File</p>
<p><input type="file" name="file" id="file" /></p>
<p><input type="submit" name="submit" value="Submit" /></p>
</form>
</body>
</html>

<?php
/*Output
Written
Pass the test.

Pass the test.

array(1) {
  ["file"]=>
  array(6) {
    ["name"]=>
    string(11) "2159548.jpg"
    ["full_path"]=>
    string(11) "2159548.jpg"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(24) "C:\xampp\tmp\php38E9.tmp"
    ["error"]=>
    int(0)
    ["size"]=>
    int(91546)
  }
}

*/


?>
