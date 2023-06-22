
<a href="C:\xampp\htdocs\Advanced Php\Date.php">Date</a></br>

<?php
echo "<br>";

echo "Include: <br>";
include("Date.php");
echo "<br>";
echo "<br>";

echo "Include Once: <br>";
include("Date.php");
include_once("Date.php");
include_once("Date.php");
echo "<br>";
echo "<br>";

echo "Require: <br>";
require("Date.php");
echo "<br>";
echo "<br>";

echo "require_once: <br>";
require("Date.php");
require_once("Date.php");
require_once("Date.php");

/*Output:

Date

Include:
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
12 Hours format and am/pm: 12 pm
24 Hours format: 12
24 Hours format & minutes: 12:18
24 Hours format,minutes seconds & AM/PM: 12: 18: 13 PM
12 Hours format,minutes seconds & am/pm: 12: 18: 13 pm

Include Once:
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
12 Hours format and am/pm: 12 pm
24 Hours format: 12
24 Hours format & minutes: 12:18
24 Hours format,minutes seconds & AM/PM: 12: 18: 13 PM
12 Hours format,minutes seconds & am/pm: 12: 18: 13 pm

Require:
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
12 Hours format and am/pm: 12 pm
24 Hours format: 12
24 Hours format & minutes: 12:18
24 Hours format,minutes seconds & AM/PM: 12: 18: 13 PM
12 Hours format,minutes seconds & am/pm: 12: 18: 13 pm

require_once:
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
12 Hours format and am/pm: 12 pm
24 Hours format: 12
24 Hours format & minutes: 12:18
24 Hours format,minutes seconds & AM/PM: 12: 18: 13 PM
12 Hours format,minutes seconds & am/pm: 12: 18: 13 pm
*/
 ?>
