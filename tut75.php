<?php
// // $str = "Hello I am 'White Hat'";
// $str = 'Hello I am "White Hat"';
// echo $str . "<br>";
// echo addslashes($str);


// $str = 'Hello I am "White Hat"';
// echo $str . "<br>";
// $newStr = addslashes($str);
// echo stripcslashes($newStr);

// $str = 'Hello I am White Hat';
// echo $str . "<br>";
// $newStr = addcslashes($str, "H");
// $newStr = addcslashes($str, "Ha");
// $newStr = addcslashes($str, "A..Z");
// $newStr = addcslashes($str, "a..z");
// echo $newStr;

$str = 'Hello \I am White \Hat';
echo $str . "<br>";

$newStr = addcslashes($str, "a..z");
echo stripslashes($newStr);





?>