<?php
// $food = array("apple","banana","manogo","grapes","papaya");
// echo sizeof($food);




// $food = array(

//     'fruits' => array("orange","apple","manogo"),
//     'veggie' => array("carrot","collard","pea")

// );
// echo sizeof($food);
// echo count($food);
// echo count($food, 1);
// echo count($food['fruits'],1);


// $food = array("apple","banana","manogo","grapes","papaya");
// $len = count($food);
// for ($i=0; $i < $len; $i++) { 
//   echo $food[$i] . "</br>";
// }


$food = array("apple","banana","manogo","grapes","papaya","banana");

echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";




?>