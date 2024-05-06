<?php
// $a = ["Sanjay","Aman", "Rehman", "Karan"];
// // $b = ["Pavan","Ravi"];

// // array_splice($a, 2);
// // array_splice($a, 2, 1);
// // array_splice($a, 1, -2);
// // array_splice($a, -1);
// // array_splice($a, 0, 1);

// echo "<pre>";
// print_r($a);
// echo "</pre>";

$a = ["Sanjay","Aman", "Rehman", "Karan"];
$b = ["Pavan","Ravi"];

// array_splice($a, 2, 2, $b);
// array_splice($a, 2, count($a), $b);
// array_splice($a, 2, 0, $b);
// array_splice($a, 0, 0, $b);
array_splice($a, count($a),0, $b);

echo "<pre>";
print_r($a);
echo "</pre>";


?>