<?php
// // $newArray = range(1,10);
// // $newArray = range(0,100, 10);
// // $newArray = range('a', 'z');
// $newArray = range('z', 'a');

// echo "<pre>";
// print_r($newArray);
// echo "</pre>";


foreach (range('a', 'z') as $letter) {
   echo $letter . "</br>";
}


?>