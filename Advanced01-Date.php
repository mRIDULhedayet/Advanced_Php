<?php

echo "Year/Month/Day format: " .date("Y/m/d"); // Year/Month/Day format
echo "<br>";
echo "Year/Month/Day format: ".date("Y-m-d"); // Year/Month/Day format
echo "<br>";
echo "Year-Month-Day format: ".date("Y.m.d"); // Year-Month-Day format
echo "<br>";

$tomorrow= mktime(0,0,0, date("m"), date("d")+1, date("y")); // Month/Day/Yeat format (Day+1)
echo "Tomowwoe is (Month/Day/Yeat format (Day+1)): ".date("m/d/y",$tomorrow);
echo "<br>";

echo "Current date of the month: ".date("j"); // 1-9 without zero
echo "<br>";
echo "Current date of the month: ".date("d"); // 1-9 with zero

echo "<br>";
echo "First three letter of current day: ".date("D");

echo "<br>";
echo "Full name of the current day: ".date("l");

echo "<br>";
echo "This Year: ".date("Y");

echo "<br>";
echo "Full name of the current Month: ".date("F");

echo "<br>";
echo " Current month: ".date("m"); // 1-9 with Zero

echo "<br>";
echo " Current month: ".date("n"); // 1-9 without zero

echo "<br>";
echo "First three letter of current month: ".date("M");

echo "<br>";
echo "12 Hours format and am/pm: ".date("g a");

echo "<br>";
echo "24 Hours format: ".date("G");

echo "<br>";
echo "24 Hours format & minutes: ".date("G:i");

echo "<br>";
echo "24 Hours format,minutes seconds & AM/PM: ".date("G: i: s A");

echo "<br>";
echo "12 Hours format,minutes seconds & am/pm: ".date("g: i: s a");



/*Output:
Year/Month/Day format: 2023/06/22
Year/Month/Day format: 2023-06-22
Year-Month-Day format: 2023.06.22
Tomowwoe is (Month/Day/Yeat format (Day+1)): 06/23/23
Current date of the month: 22
Current date of the month: 22
First three letter of current day: Thu
Full name of the current day: Thursday
This Year: 2023
Full name of the current Month: June
Current month: 06
Current month: 6
First three letter of current month: Jun
12 Hours format and am/pm: 11 am
24 Hours format: 11
24 Hours format & minutes: 11:59
24 Hours format,minutes seconds & AM/PM: 11: 59: 31 AM
12 Hours format,minutes seconds & am/pm: 11: 59: 31 am
*/

 ?>
