<?php
// $a = array(
// 	"Bill" => 10,
// 	"Joe" => 20,
// 	"Peter" => 30
// 	);

//   $newArray =   array_flip($a);
//   echo "<pre>";
//   print_r($newArray);
//   echo "</pre>";


$a = array(
	"Bill" => 10,
	"Joe" => 20,
	"Peter" => 30
	);

//   $newArray =   array_change_key_case($a);
//   $newArray =   array_change_key_case($a, CASE_UPPER);
  $newArray =   array_change_key_case($a, CASE_LOWER);
  echo "<pre>";
  print_r($newArray);
  echo "</pre>";

?>