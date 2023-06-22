<?php
$For27days= 60*60*24*27+time();
setcookie("lastVisit", date("g:i:s a d/m/y"),$For27days);

if(isset($_COOKIE["lastVisit"])) {
  // code...
  $visit=$_COOKIE["lastVisit"];

}
else {

  echo "last visit was: ".$visit;
}


 ?>
<?php
setcookie("lastVisit", "", time()-3600);


 ?>
