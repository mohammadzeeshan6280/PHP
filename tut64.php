<?php

// $str = "White Hat";
// // $array = str_split($str);
// $array = str_split($str, 2);

// echo "<pre>";
// print_r($array);
// echo "</pre>";


$str = "White Hat";
// $newStr = chunk_split($str, 1, ".");
// $newStr = chunk_split($str, 2, "...");
$newStr = chunk_split($str, 3, "<br>");

echo $newStr;

?>