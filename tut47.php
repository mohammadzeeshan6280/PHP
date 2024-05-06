<?php

// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "e" => "Mohan", "f" => "Baba");
// $a3 = array("a" => "Sanjay", "h" => "Danish", "g" => "Aman");

// $newArray = array_intersect($a1,$a2,$a3);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");


// $newArray = array_intersect_key($a1,$a2);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");
// $newArray = array_intersect_assoc($a1,$a2);
// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// function compare($a,$b){
//     if ($a===$b) {
//        return 0;
//     }
//     return ($a > $b) ? 1 : -1;
// };


// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");


// $newArray = array_intersect_uassoc($a1,$a2, "compare");
// // $newArray = array_intersect_uassoc($a1,$a2, "strcasecmp");

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// function compare($a,$b){
//     if ($a===$b) {
//        return 0;
//     }
//     return ($a > $b) ? 1 : -1;
// };


// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");


// $newArray = array_uintersect_assoc($a1,$a2, "compare");

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// function compare($a,$b){
//     if ($a===$b) {
//        return 0;
//     }
//     return ($a > $b) ? 1 : -1;
// };


// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");


// $newArray = array_intersect_ukey($a1,$a2, "compare");

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

// function compare($a,$b){
//     if ($a===$b) {
//        return 0;
//     }
//     return ($a > $b) ? 1 : -1;
// };


// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
// $a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");


// $newArray = array_uintersect($a1,$a2, "compare");

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


function compare($a,$b){
    if ($a===$b) {
       return 0;
    }
    return ($a > $b) ? 1 : -1;
};

function compareValue($a,$b){
    if ($a===$b) {
       return 0;
    }
    return ($a > $b) ? 1 : -1;
};


$a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");
$a2 = array("a" => "Sanjay", "d" => "Mohan", "f" => "Baba");

$newArray = array_uintersect_uassoc($a1,$a2, "compare", "compareValue");

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>