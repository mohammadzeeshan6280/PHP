<?php
/*
// $a = ["Sanjay","Aman", "Rehman", "Karan","Baba"];

// $b = array_slice($a, 1 , 3);
// $b = array_slice($a, -2 , 2);
$b = array_slice($a, 1 , 3,true);

echo "<pre>";
print_r($b);
echo "</pre>";
*/


// $a = ['a' => "Sanjay", 'b' => "Aman", '42' => "Rehman", 'd' => "Karan"];

// $b = array_slice($a, 1 , 3);
// $b = array_slice($a, 1 , 3,true);

// echo "<pre>";
// print_r($b);
// echo "</pre>";

$a = ['0' => "Sanjay", '1' => "Aman", '2' => "Rehman", '3' => "Karan", '4' => "Baba"];

$b = array_slice($a, 1 , 3);
// $b = array_slice($a, 1 , 3,true);

echo "<pre>";
print_r($b);
echo "</pre>";

?>