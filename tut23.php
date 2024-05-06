<?php
echo "Continue Statement in PHP </br>";
for ($i = 0; $i <= 20 ; $i++) { 
    if ($i == 5){
        echo "Hey </br>";
        continue;
    }
   echo $i . "</br>";
}

echo "Break Statement in PHP </br>";
for ($i = 0; $i <= 20 ; $i++) { 
    if ($i == 5){
        echo "Hey </br>";
        break;
    }
   echo $i . "</br>";
}


?>