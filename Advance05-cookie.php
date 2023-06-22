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

/* Output:
Inspect(Q) -> Network -> Cookies -> 
1. Respones Cookies: 
{
	"Response Cookies": {
		"lastVisit": {
			"expires": "2023-07-19T12:54:35.000Z",
			"value": "2:54:35 pm 22/06/23"
		}
	}
}
2. Requesr:
{
	"Request Cookies": {
		"lastVisit": "2:49:54 pm 22/06/23"
	}
}
 ?>
