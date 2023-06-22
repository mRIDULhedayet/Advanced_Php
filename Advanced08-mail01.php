<?php
$to="****@gmail.com";
$subject="Test Mail";
$message="This is a test mail.";
$from= "******@gmail.com";
$headers= "From:" .$from;
mail($to,$subject,$message,$headers);
echo "Mail Sent successfully.";
//Output:
// Mail Sent successfully.
 ?>
