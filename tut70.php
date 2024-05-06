<?php
// $str = "Hello world. This world is nice";

// // echo str_replace("world", "Everyone", $str);
// echo str_replace("world", " ", $str);

// $str = "Hello world. This world is nice";
// $find = ["Hello" , "World"];
// $replace = ["Hi" , "earth"];
// echo str_replace($find, $replace , $str);

// $str = "Hello world. This world is nice";
// $find = ["Hello" , "World"];
// $replace = ["Hi" , "earth"];
// echo str_ireplace($find, $replace , $str);


// $color = ["blue", "red", "green", "yellow"];
// echo "<pre>";
// print_r(str_replace("red", "pink" , $color));
// echo "</pre>";

// $str = "Hello world. This world is nice";
// // echo substr_replace($str, "earth", 6);
// // echo substr_replace($str, "earth", 6, 10);
// // echo substr_replace($str, "earth", 6, -5);
// echo substr_replace($str, "earth", 0, 0);



// $str = "Hello world. This world is nice";
// echo strtr($str, "eo", "ia");


$str = "Hello world. This world is nice";
$array = ["Hello" => "Hi", "world" => "earth"];
echo strtr($str, $array);




?>