<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_onlinemedicalmanagmensystem"; //Pozor

if(!($con = mysqli_connect($dbhost, $dbuser,$dbpass,$dbname)))
{

    die("Failed to connect");
}

