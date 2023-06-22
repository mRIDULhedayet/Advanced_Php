<?php
echo date_default_timezone_get();
echo "<br>";
date_default_timezone_set("Asia/Dhaka");
echo date_default_timezone_get();
echo "<br>";
echo date("d-M-y h:i:s A");
echo "<br>";
/*Output:
Europe/Berlin
Asia/Dhaka
22-Jun-23 11:48:58 PM
*/
 ?>
<?php

$default_zone="Europe/Berlin";
$client_zone = 'Asia/Dhaka';
$newTime = DateTime::createFromFormat('Y-m-d H:i:s', '2023-06-22 11:50:23', new DateTimeZone($default_zone));
$date = $newTime->setTimeZone(new DateTimeZone($client_zone));
echo $date->format('d M y h:i:s A');
/*output:
22 Jun 23 03:50:23 PM
*/
 ?>
