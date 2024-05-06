<?php
// $name = array("Sanjay", "Aman", "Rehman", 74,  "Karan",);
// // echo in_array ("Rehman", $name);


// if (in_array(74, $name, true)) {
//     echo "Find Succeccfully";
// } else{
//     echo "Can't Find";
// };


// $a = array(array("p","h"),array("p", "r"), "0");
// if (in_array(array("p","h"), $a, true)) {
//     echo "Find Succeccfully";
// } else{
//     echo "Can't Find";
// };


// $name = array("Sanjay", "Aman", "Rehman", 74,  "Karan",);
// echo array_search(74,$name);

$food = array('a' => 'orange', 'b' => 'banana', 'c' => 'apple', 'd' => 'manogo');
echo array_search('apple',$food);
?>