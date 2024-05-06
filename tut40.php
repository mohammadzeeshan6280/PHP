<?php
// $name1 = ["Sanjay", "Aman", "Rehman", 1 =>  "Karan"];
// $name1 = ["Sanjay", "Aman", "Rehman", 74,  "Karan"];
// $name2 = ["White" , "Ansari" , "Ram"];
// $name3 = ["red","yellow","blue"];


// $newArray =  array_replace($name1, $name2,$name3);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


/*
// $name1 = ["Sanjay", "Aman", "Rehman",  "Karan"];
$name1 = ["Sanjay", "Aman", "a" => "Rehman",  "Karan"];

// $name2 = ["a" => "White" , "b" => "Ansari" , "Ram"];
$name2 = ["a" => "White" , 1 => "Ansari" , "Ram"];

$newArray =  array_replace($name1, $name2);
echo "<pre>";
print_r($newArray);
echo "</pre>";
*/


$array1 = array("a" => array("Red"), "b"=>array("green", "pink"));

$array2 = array("a" => array("yellow"), "b"=>array("black"));


$newArray =  array_replace_recursive($array1, $array2);
echo "<pre>";
print_r($newArray);
echo "</pre>";





?>