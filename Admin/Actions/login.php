<?php

session_start();
include ('functions.php');
// Getting the form data
$username = $_POST['username'];
$password = $_POST['password'];

// validating the user data
// check if login can be done or not using a function
$uservalidity = checkUserByUsernameAndPassword($username,$password);

if(!$uservalidity){
    echo " <script> alert('Login failed') 
    window.location = '../Partials/login.php'
 </script>";

}

$_SESSION['bookit-admin-user'] = $username;

echo " <script> alert('Login Successful') 
        window.location = '../'
 </script>";
