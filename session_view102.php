<?php

// session_start();
// print_r($_SESSION) ;

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

<?php
echo "Favorite Color : " . $_SESSION["favcolor"];

// if (isset($_SESSION["favcolor"])) {
//     echo "Favorite Color : " . $_SESSION["favcolor"];
// }


?>
    
</body>
</html>