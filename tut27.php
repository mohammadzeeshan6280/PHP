<?php
// function demo($a,$b){
//     // $c =  $a - $b;
//     // $c =  $a - $b;
//     $c =  $a * $b;
//     return $c;
// }

// $c = demo(15,20);
// echo $c;

// function hello($fname,$lname){
//     // echo $fname . " " . $lname;
//     $name =  $fname . " " . $lname;
//     return $name;
// }

// // hello("MOHAMMAD", "ZEESHAN");
// $name = hello("MOHAMMAD", "ZEESHAN");
// echo $name;


// function hello($fname="White",$lname="Hat"){
//     $name =  $fname . " " . $lname;
//     return $name;
// }

// // $name = hello();
// $name = hello("MOHAMMAD", "ZEESHAN");
// echo $name;

// function hello($fname="White",$lname="Hat"){
//     $name =  "$fname  $lname";
//     return $name;
// }

// // $name = hello();
// $name = hello("MOHAMMAD", "ZEESHAN");
// echo "Hello $name";


function sum($math, $phy, $che){
    // echo $math + $phy + $che;
    $s =  $math + $phy + $che;
    return $s;

}

function per($st){
$pr = $st / 3;

echo $pr . "%";

}


$total = sum(70,59,65);

per($total);

// echo $total;


?>