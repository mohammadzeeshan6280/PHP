<?php

$a = array("Orange","banana", "apple", "grapes");

echo "<b> Current : </b>" . current($a) . "</br>";
echo "<b> Key : </b>" . key($a) . "</br>";
echo "<b> Pos : </b>" . pos($a) . "</br>";

next($a);
echo "<b> Current : </b>" . current($a) . "</br>";

next($a);
echo "<b> Current : </b>" . current($a) . "</br>";

prev($a);
echo "<b> Current : </b>" . current($a) . "</br>";

end($a);
echo "<b> Current : </b>" . current($a) . "</br>";
echo "<b> Key : </b>" . key($a) . "</br>";


reset($a);
echo "<b> Current : </b>" . current($a) . "</br>";

echo "<pre>";
print_r(each($a));
echo "</pre>";





?>
