<?php

// $arry = array(
// 	array(
// 		'id' => 2201,
// 		'first_name' => 'Anil',
// 		'last_name' => 'Kapoor',

// 	),
// 	array(
// 		'id' => 2202,
// 		'first_name' => 'White',
// 		'last_name' => 'Hat',

// 	),
// 	array(
// 		'id' => 2203,
// 		'first_name' => 'Salman',
// 		'last_name' => 'Khan',

// 	)
// );

// $newArray = array_column($arry,'first_name', 'id');

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


// $colors = ["Red", "Green", "Blue", "Yellow", "Orange","Pink"];

// // $newArray = array_chunk($colors,2);
// $newArray = array_chunk($colors,3);

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";

$age = array(

    "Mohan" => 42,
    "Ram" => 22,
    "Pavan" => 35,
    "Baba" => 27,
    "Raja" => 39,
    "Danish" => 50
);

// $newArray = array_chunk($age,3);
$newArray = array_chunk($age,3,true);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>