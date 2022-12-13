<?php
session_start();

    include("connection.php");
    include("functions.php");



    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //something was posted
        $user_name = $_POST['username'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to database
            $user_id = random_num(20);
            $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

            mysqli_query($con, $query);

            header("Location: login.php");
            die;

        }else
        {
            echo "Please enter some valid information!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>

    <style> 

        .box{
            position: fixed;
            top: 300px;
            bottom: 300px;
            left: 575px;
            right: 575px;
            min-width: 300px;
            min-height: 200px;
        }

        .form{
            background-color: rgb(112,128,144);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .text-login {
            margin-top: 15px;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .username,
        .password {
            padding-top: 3px;
            padding-bottom: 3px;
            
        }

        .submit{
            background-color: white;
            border-color: rgb(40, 138, 230);
            color: rgb(40, 138, 230);
            height: 35px;
            width: 62px;
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            cursor: pointer;
        }
        .submit:hover{
            background-color: rgb(40, 138, 230);
            border-color: rgb(40, 138, 230);
            color: white;
            height: 35px;
            width: 62px;
            border-radius: 2px;
            border-width: 1px;
            border-style: solid;
            cursor: pointer;
        }
        .submit:active{
            background-color: rgb(102, 164, 218);;
            border-color: rgb(102, 164, 218);;;
        }

        .link-login {
            margin-bottom: 15px;
        }

        .login:hover {
            color: lightgray;
        }

        .login {
            font-size: 15px;
            color: white;
        }

        .intro_logo_image_container {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;    
        }

    
    </style>
</head>
<body>
    <div class="intro_logo_image_container">
        <img class="intro_logo_image" src="images/intro_logo.avif">
    </div>

    <div class="box">

        <form class="form" method="post">
            <div class="text-login">Signup</div>
            <div class="username-div">
                <input class="username" type="text" name="username" placeholder="username">
            </div>
            <div class="password-div">
                <input class="password" type="password" name="password" placeholder="password">
            </div>
            <div class="submit-div">
                <input class="submit" type="submit" value="Signup">
            </div>
            <div class="link-login">
                <a class="login" href="login.php">Click to Login</a>
            </div>
        </form>

    </div>
    
</body>
</html>