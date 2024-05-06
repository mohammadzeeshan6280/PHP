<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

// echo $_GET['name'] . "<br>";
// echo $_GET['age'] . "<br>";
// echo $_GET['save'] . "<br>";



echo "<pre>";
print_r($_SERVER);
echo "</pre>";
echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";
echo $_SERVER['MYSQL_HOME'] . "<br>";


?>