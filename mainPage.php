<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Medical Managment System</title>
</head>
<body>
    
    <a href="logout.php"> Logout </a>
    <h1>This is a main page</h1>

    <br>
    Hello, 
    <?php
        echo $user_data['user_name'];
    ?>
    

</body>
</html>