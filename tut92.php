<?php
// $date = getdate();
// echo $date['month'];
// echo "<pre>";
// print_r(getdate());
// echo "</pre>";

// $date = getdate();
// echo $date['month'] . " - " . $date['year'];
// echo "<pre>";
// print_r(getdate());
// echo "</pre>";

// $olddate = mktime(0,0,0,03,15,2015);
// $date = getdate($olddate);
// echo $date['month'] . " - " . $date['year'];
// echo "<pre>";
// print_r(getdate($olddate));
// echo "</pre>";

// echo "<pre>";
// print_r(gettimeofday());
// echo "</pre>";
// $date = gettimeofday();
// echo $date['sec'];

// echo "<pre>";
// print_r(gettimeofday());
// echo "</pre>";
// echo gettimeofday(true);

// echo "<pre>";
// print_r(localtime());
// echo "</pre>";

// echo "<pre>";
// print_r(localtime(time(), true));
// echo "</pre>";

$olddate = mktime(0,0,0,03,15,2015);
echo "<pre>";
print_r(localtime($olddate, true));
echo "</pre>";





?>