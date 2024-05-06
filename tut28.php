<?php
// function testing($string){

//     $string .= " and something extra.";
// }

// $str = "This is string";
// testing($str);
// echo $str;

// function testing(&$string){

//     $string .= " and something extra.";
// }

// $str = "This is string";
// testing($str);
// echo $str;


function first($num){
    // $num += 5;
    $num = $num + 5;

}

function second(&$num){
 // $num += 5;
 $num = $num + 7;
}

$number = 10;
first($number);
echo "Oringinal Value is $number </br>";

second($number);
echo "Oringinal Value is $number </br>";





?>