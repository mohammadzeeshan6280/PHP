<?php
// $a = array(
// 	"a" => "Lemon",
// 	"b" => "Apple",
// 	"c" => "Banana",
// 	"d" => "Orange"
// 	);

//     array_walk($a , "myFunction", "is a key of");

//     function myFunction($value , $key , $param){
//     echo "$key $param $value" . "</br> ";
//     }


$veggie = array("1" => "Carrot", "2" => "Tomatoes");
$a = array(
    $veggie,
	"a" => "Lemon",
	"b" => "Apple",
	"c" => "Banana",
	"d" => "Orange"
	);

    array_walk_recursive($a , "myFunction", "is a key of");

    function myFunction($value , $key , $param){
    echo "$key $param $value" . "</br> ";
    }

?>