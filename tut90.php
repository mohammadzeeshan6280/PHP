<?php
// echo checkdate(2,15,2004);
// echo checkdate(2,32,2004);
// echo checkdate(2,29,2004);
// echo checkdate(2,29,2005);


// $date1 = date_create("1998-05-19");
// $date2 = date_create("2023-12-07");
// $diff = date_diff($date1, $date2);
// echo "<pre>";
// print_r($diff);
// echo "</pre>";

// $date1 = date_create("1998-05-19");
// $date2 = date_create("2023-12-07");
// $diff = date_diff($date1, $date2);
// echo $diff->days . " days";
// echo "<pre>";
// print_r($diff);
// echo "</pre>";

$date1 = date_create("1998-05-19");
$date2 = date_create("2023-12-07");
$diff = date_diff($date1, $date2);
// echo $diff->format("%R%a days");
// echo $diff->format("%r%a days");
echo $diff->format("%r%a %m days");
echo "<pre>";
print_r($diff);
echo "</pre>";

?>