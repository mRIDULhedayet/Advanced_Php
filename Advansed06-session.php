<?php
session_start();
// Destroy session
if (isset($_SESSION["views"])) {
   $_SESSION["views"] +=1;
   echo ("views= ".$_SESSION["views"]);
   echo "<br>";
}
else {
   $_SESSION["views"]=1;
   echo ("views= ".$_SESSION["views"]);
   echo "<br>";
}

if ($_SESSION["views"] >5){
      session_destroy();
      echo "Session Destroyed.";
   }

// clear session
if (isset($_SESSION["watch"])) {
   $_SESSION["watch"] +=1;
   echo "<br>";
   echo ("watch= ".$_SESSION["watch"]);
   echo "<br>";
}
else {
   $_SESSION["watch"]=1;
   echo "<br>";
   echo ("watch= ".$_SESSION["watch"]);
   echo "<br>";
}

if ($_SESSION["watch"] >5){
      unset($_SESSION["watch"]);
      echo "clear Session. ";
   }


/* Output:
 # Destroy session
 views= 6
 Session Destroyed.
 
 # Clear session
watch= 6
clear Session. 
*/
 ?>
