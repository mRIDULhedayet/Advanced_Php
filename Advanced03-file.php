<?php
$write="Open Writing...";
$a= fopen("test.txt","r+") or die("unable to open file test.txt");;
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


 ?>

 <?php
 if($_POST['submit']){ //Upkoad file
 echo '<pre>';
 var_dump($_FILES);  //display file details with array.
    
 $upload_folder = 'PHP_Basic/';
 move_uploaded_file($_FILES['file']['tmp_name'], $upload_folder.$_FILES['file']['name']); //move uploaded file
 echo "Success.";
 }
  
 ?>
