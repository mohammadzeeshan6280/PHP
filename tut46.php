<?php
// $a = ["Sanjay","Aman", "Rehman", "Karan"];

// $b = array_keys($a);

// echo "<pre>";
// print_r($b);
// echo "</pre>";


// $name = [
//     "first" => "Ansari",
//     "second" => "White",
//     "third" => "Danish",
//     "four" => "Baba"
// ];

// // $b = array_keys($name);
// // $b = array_key_first($name);
// // $b = array_key_last($name);
// // $b = array_key_exists("second" , $name);
// $b = key_exists("third", $name);

// echo "<pre>";
// print_r($b);
// echo "</pre>";


$name = [
    "first" => "Ansari",
    "second" => "White",
    "third" => "Danish",
    "four" => "Baba"
];

$b = key_exists("six", $name);

if($b){
    echo "Key Exists";
} else {
    
    echo "Key does not Exists";
}





?>