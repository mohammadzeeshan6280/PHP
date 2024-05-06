<?php

// $date = date_create("2023-1-12");
// // echo date_format($date, "1");
// echo date_format($date, "d/m/Y H:i:s");

// $date = date_create("2023-1-12 22:25:00");
// $date = date_create("2013-1-12 22:25:00");
// echo date_format($date, "d/m/Y H:i:s");

$date = date_create("2013-1-12 22:25:00", timezone_open("Asia/Kolkata"));
echo date_format($date, "d/m/Y H:i:s");




?>