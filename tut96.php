<?php

// echo date_default_timezone_get();

// date_default_timezone_set("Asia/Kolkata");
// echo date_default_timezone_get() . "<br>";

// $tz = timezone_open("Asia/Kolkata");
// echo timezone_name_get($tz) . "<br>";

// echo "<pre>";
// print_r(timezone_location_get($tz));
// echo "</pre>";

// date_default_timezone_set("Europe/Paris");
// echo date_default_timezone_get() . "<br>";

// $tz = timezone_open("Europe/Paris");
// echo timezone_name_get($tz) . "<br>";

// echo "<pre>";
// print_r(timezone_location_get($tz));
// echo "</pre>";

// echo "<pre>";
// print_r(timezone_identifiers_list());
// echo "</pre>";

// echo "<pre>";
// print_r(timezone_identifiers_list(1));
// echo "</pre>";

echo "<pre>";
print_r(timezone_identifiers_list(16));
echo "</pre>";

?>