<?php

// echo (strtotime("now"))
// echo date("d-m-Y", strtotime("now"))
// echo date("d-m-Y", strtotime("3 Dec 2023")) . "<br>";
// echo date("d-m-Y H:m", strtotime("+5 hours")) . "<br>";
// echo date("d-m-Y H:m", strtotime("+1 week")) . "<br>";
// echo date("d-m-Y H:m", strtotime("+1 week 3 days 7 hours 5 seconds")) . "<br>";
// echo date("d-m-Y H:m", strtotime("+1 Monday")) . "<br>";
// echo date("d-m-Y H:m", strtotime("last sunday")) . "<br>";
// echo date("d-m-Y H:m", strtotime("First day of last month")) . "<br>";

echo  strftime("%B %d %Y, %X %Z") . "<br>";
echo  strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,18,2005)) . "<br>";
echo  strftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br>";
echo  gmstrftime("%d/%m/%Y %H:%M:%S", mktime(21,30,0,05,18,2005)) . "<br>";


?>