<?php
// $color = array("red","green","blue");
// list($a, $b ,$c) = $color;

// echo "Value of a : $a <br>";
// echo "Value of a : $b <br>";
// echo "Value of a : $c <br>";

// $color = array(22,54,75);
// list($a, $b ,$c) = $color;

// echo "Value of a : $a <br>";
// echo "Value of a : $b <br>";
// echo "Value of a : $c <br>";

// $color = array(22,54,75);
// list(,  , $c) = $color;

// // echo "Value of a : $a <br>";
// // echo "Value of a : $b <br>";
// echo "Value of a : $c <br>";


// $color = array(0 => 'red' , 1 => 'green' , 2 => 'blue');
// list($a, $b , $c) = $color;

// echo "Value of a : $a <br>";
// echo "Value of a : $b <br>";
// echo "Value of a : $c <br>";


$color = array(0 => 'red' , 1 => 'green' , 2 => 'blue');
list($a[0], $a[1] , $a[2]) = $color;
echo "Value of a : $a[0] <br>";
echo "Value of a : $a[1] <br>";
echo "Value of a : $a[2] <br>";

?>