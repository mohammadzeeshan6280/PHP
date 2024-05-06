<?php
// function myFunction($n , $m){
// return $n . " " . $m;

// }

// $a = ['Apple','Banana','Mango'];

// // $newArray = array_reduce($a, 'myFunction');
// // $newArray = array_reduce($a, 'myFunction', 'lemon');
// $newArray = array_reduce($a, 'myFunction', 786);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


function myFunction($n , $m){
// return $n . " " . $m;
// return $n + $m;
// return $n * $m;

// $n = $n + $m;
$n += $m;
return $n;
}


$a = [1,2,3,4];

// $newArray = array_reduce($a, 'myFunction');
$newArray = array_reduce($a, 'myFunction', 1);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>