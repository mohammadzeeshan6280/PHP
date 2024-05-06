<?php
// $str = "Hello world. It's a beautiful day.";

// // $array = explode(". ", $str);
// // $array = explode(". ", $str);
// // $array = explode(" ", $str, 4);
// $array = explode(" ", $str, -1);

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $str = "red,green,blue,orange";

// // $array = explode(". ", $str);
// // $array = explode(". ", $str);
// // $array = explode(" ", $str, 4);
// $array = explode(",", $str);

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// $str = array("Hello" , "World!","Beautiful","Day!");

// // $str = implode(" ", $str);
// // $str = implode("-", $str);
// // $str = implode("Awesome", $str);
// $str = implode("<br>", $str);

// echo $str;


$str = array("Hello" , "World!","Beautiful","Day!");

// $str = join(" ", $str);
// $str = join("-", $str);
// $str = join("Awesome", $str);
$str = join("<br>", $str);

echo $str;



?>