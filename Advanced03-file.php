<?php
$write="Open Writing...";
$a= fopen("test.txt","r+");
$read = fread($a, filesize("test.txt"));
if (fwrite($a,$write)==FALSE) {

   echo "can't write <br>";
}
else {

  echo "Written <br> ";
}


fclose($a);

echo $read;


$b= fopen("test.txt","r");
echo "<br>";
echo "<br>";
echo fgets($b);
fclose($b);


/*Output:
Written
Pass the test.

Pass the test.
*/

 ?>
