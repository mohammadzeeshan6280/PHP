<?php
// $str = "Hello world. This world is nice";

// // echo strpos($str, "world");
// // echo strpos($str, "world", 10);
// echo strpos($str, "world", -10);


// $str = "Hello WORLD. This world is nice";
// echo "strpos : " . strpos($str, "world") . "<br>";
// echo "strrpos : " . strrpos($str, "world") . "<br>";


$str = "Hello WORLD. This world is nice";
// echo "stripos : " . stripos($str, "world") . "<br>";
echo "stripos : " . stripos($str, "world", 10) . "<br>";
echo "strripos : " . strripos($str, "world") . "<br>";


?>