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
<<<<<<< HEAD:index.php
    
=======
    <h1>This is a main page</h1>

    <br>
    Hello, 
    <?php
        echo $user_data['user_name'];
    ?>
>>>>>>> 3c874bb42d4a160cbda983ee5b0d768e9fd65ef4:mainPage.php
    

</body>
</html>