<?php

var_dump(filter_var("example@gmail.com",FILTER_VALIDATE_EMAIL));
echo "<br>";
var_dump(filter_var("ex/am\ple@gmail.com",FILTER_SANITIZE_EMAIL));
echo "<br>";
var_dump(filter_var("http://www.w3schools.com",FILTER_VALIDATE_URL));
echo "<br>";
var_dump(filter_var("http://www.w3sc�hools.com",FILTER_SANITIZE_URL));
echo "<br>";
var_dump(filter_var( "123456789",FILTER_VALIDATE_INT));
echo "<br>";
var_dump(filter_var("dgfdg",FILTER_VALIDATE_FLOAT));
echo "<br>";
var_dump(filter_var("12345.6789",FILTER_VALIDATE_FLOAT));
echo "<br>";
var_dump(filter_var("<p>this is a strinh.</p>",FILTER_SANITIZE_STRING));

echo "<br>";
var_dump(filter_var("127.0.0.1",FILTER_VALIDATE_IP));


/*Output:
string(17) "example@gmail.com"
string(17) "example@gmail.com"
string(24) "http://www.w3schools.com"
string(24) "http://www.w3schools.com"
int(123456789)
bool(false)
float(12345.6789)
string(17) "this is a strinh."
string(9) "127.0.0.1"
*/
 ?>

