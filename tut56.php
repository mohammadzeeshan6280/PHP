<?php
// function square($n){
// return $n * $n;
// }

// $a = [1,2,3,4,5,6];

// $newArray =  array_map('square' ,$a);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// function square($n, $m){
// // return "$n = $m";
// // return "$n for $m";
// return [$n => $m];
// }

// $a = [1,2,3,4,5];
// $b = ["Red", "Green", "Blue", "Brown", "Orange"];

// // $newArray =  array_map('square' ,$a , $b);
// $newArray =  array_map(null ,$a , $b);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


function square($n){
// return [$n => $m];
return strtoupper($n);
}

$a = array("one" => "Apple", "two" => "Banana", "three" => "Orange");

// $newArray =  array_map(null ,$a);
$newArray =  array_map('square' ,$a);
echo "<pre>";
print_r($newArray);
echo "</pre>";



?>