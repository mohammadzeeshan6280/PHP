<?php
// $a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Mohan", "d" => "Rajesh");

// $b = array_values($a1);
// echo "<pre>";
// print_r($b);
// echo "</pre>";

$a1 = array("a" => "Sanjay", "b" => "Aman","c" => "Sanjay", "d" => "Rajesh");

$b = array_unique($a1);
echo "<pre>";
print_r($b);
echo "</pre>";
?>