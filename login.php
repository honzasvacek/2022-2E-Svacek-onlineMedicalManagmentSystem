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
            //read from database
            $query = "select * from users where user_name = '$user_name' limit 1";

            $result = mysqli_query($con, $query);

            if($result)
            {

                //jestli je result true = zadane user_name je i v databazi
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);
                    
                    if($user_data['password'] == $password)
                    {
                        
                        $_SESSION['user_id'] = $user_data['user_id'];
                        header("Location: mainPage.php");
                        die;
                    }
                }

            }
            echo "Please enter some valid information!";
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
    <title>Login</title>

    <style> 

        .box{
            height: 300px;
            width: 300px;
        }

        .form{
            background-color: darkblue;
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

        .link-signup {
            margin-bottom: 15px;
        }

        .signup {
            font-size: 15px;
            color: white;
        }

    
    </style>
</head>
<body>

    <div class="box">

        <form class="form" method="post">
            <div class="text-login">Login</div>
            <div class="username-div">
                <input class="username" type="text" name="username" placeholder="username">
            </div>
            <div class="password-div">
                <input class="password" type="password" name="password" placeholder="password">
            </div>
            <div class="submit-div">
                <input class="submit" type="submit" value="Login">
            </div>
            <div class="link-signup">
                <a class="signup" href="signup.php">Click to Signup</a>
            </div>
        </form>

    </div>
    
</body>
</html>