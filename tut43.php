<?php
// $a = ["Sanjay","Aman", "Rehman", "Karan"];
// $b = ["Pavan","Ravi"];
// $c = ["Baba","Danish","Asha"];

// $d = array_merge($a, $b, $c);

// echo "<pre>";
// print_r($d);
// echo "</pre>";

/*
$a = ['a' => "Sanjay", 'b' => "Aman", 'c' => "Rehman", "Karan"];
// $b = ['d' => "Pavan", 'e' => "Ravi"];
$b = ['b' => "Pavan", 'c' => "Ravi" , 45 ,65];

$d = array_merge($a, $b);
// $d = $a + $b;

echo "<pre>";
print_r($d);
echo "</pre>";
*/

/*
$a = ['a' => "Sanjay", 'b' => "Aman", 'c' => "Rehman", "Karan"];
// $b = ['d' => "Pavan", 'e' => "Ravi"];
// $b = ['b' => "Pavan", 'c' => "Ravi" , 45 ,65];
$b = ['b' => ["color" => ['red', "blue", "green"]],
            'c' => "Ravi",
             45,
             65
            ];

$d = array_merge_recursive($a, $b);
echo "<pre>";
print_r($d);
echo "</pre>";
*/

$name = array("Ram", "Mohan", "Salman");
$age = array("35","24","28");

$combine = array_combine($name, $age);
echo "<pre>";
print_r($combine);
echo "</pre>";




?>