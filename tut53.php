<?php
// $a = array("Red", "Green", "Blue", "Brown", "Orange");

// // $newArray = array_rand($a);
// $newArray = array_rand($a,2);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// // echo $a[$newArray];
// echo $a[$newArray[0]] . " ";
// echo $a[$newArray[1]] . " ";


// $a = array("a" => "red", "b" => "green","c" => "blue", "d" => "yellow");

// // $newArray = array_rand($a);
// $newArray = array_rand($a,2);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $a = array("Red", "Green", "Blue", "Brown", "Orange");
$a = array("a" => "red", "b" => "green","c" => "blue", "d" => "yellow");

shuffle($a);
echo "<pre>";
print_r($a);
echo "</pre>";





?>