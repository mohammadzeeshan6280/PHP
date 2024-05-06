<?php
// $per = 50;

// if ($per >= 80 && $per <= 100) {
//    echo "Merit";
// } elseif ($per >= 60 && $per < 80){
//     echo "Ist Division";
// } elseif ($per >= 45 && $per < 60){
//     echo "IIst Division";
// } elseif ($per >= 33 && $per < 45){
//     echo "IIIst Division";
// } elseif ($per < 33){
//     echo "Fail";
// } else {
//     echo "Please Enter vaild percentange";
// }

$per = 50;

if ($per >= 80 && $per <= 100):
    echo "Merit";
    elseif ($per >= 60 && $per < 80):
    echo "Ist Division";
elseif ($per >= 45 && $per < 60):
    echo "IIst Division";
elseif ($per >= 33 && $per < 45):
    echo "IIIst Division";
elseif ($per < 33):
    echo "Fail";
else :
    echo "Please Enter vaild percentange";

endif;

?>