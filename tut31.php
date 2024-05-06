<?php
// function test(){
//     $a = 10;
//     echo "Variable A inside function : $a";
// }

// test();
// echo "Variable A outside function : $a";

// $a = 10;
// function test(){
//     echo "Variable A inside function : $a";
// }

// test();
// echo "Variable A outside function : $a";

// $a = 10;
// function test(){
//     global $a;
//     echo "Variable A inside function : $a </br> ";
// }

// test();
// echo "Variable A outside function : $a";

$a = 10;
$b = 5;
function test(){
    global $a , $b;
    $a = $a + $b;
   
}

test();
echo $a;

?>