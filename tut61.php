<?php
// $color = array("a" => "red", "b" => "green","c" => "yellow");

// extract($color);

// echo "Value of a : $a </br>";
// echo "Value of b : $b </br>";
// echo "Value of c : $c </br>";


// $a = "orange";
// $color = array("a" => "red", "b" => "green","c" => "yellow");

// // extract($color, EXTR_OVERWRITE);
// // extract($color, EXTR_SKIP);
// extract($color, EXTR_PREFIX_SAME, "test");

// echo "Value of a : $a </br>";
// echo "Value of a : $test_a </br>";
// echo "Value of b : $b </br>";
// echo "Value of c : $c </br>";

// $a = "orange";
// $color = array("a" => "red", "b" => "green","c" => "yellow");

// extract($color, EXTR_PREFIX_ALL, "test");

// echo "Value of a : $a </br>";
// echo "Value of a : $test_a </br>";
// echo "Value of b : $test_b </br>";
// echo "Value of c : $test_c </br>";


$firstname = "White";
$lastname = "hat";
$age = "24";
$gender = "Male";
$country = "India";

$extra = ["gender", "country"];

$newArray =  compact("firstname", "lastname", "age", $extra);

echo "<pre>";
print_r($newArray);
echo "</pre>";













?>


