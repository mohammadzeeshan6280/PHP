<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>
    <!-- <form action="testform1.php" method="get"> -->
        <!-- <form action="testform.php" method="post"> -->
       
        <!-- Self page data show -->
        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name">Name :</label>
        <input type="text" name="name" id="name"> <br> <br>

        <label for="age">Age :</label>
        <input type="text" name="age" id="age"> <br> <br>

        <input type="submit" name="save">
    </form>

    <?php
    if(isset($_POST['save'])){
        echo $_POST['name'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
?>
    
</body>
</html>