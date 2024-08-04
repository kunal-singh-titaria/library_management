<?php

session_start();
include ('functions.php');
// Getting the form data
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$addedBy = $_SESSION['bookit-admin-user'];

//
// validating the user data
// regsiter the user
$status = addAdminUserToTheDatabase($username,$password,$email,$addedBy);

if(!$status){
    echo " <script> alert('Registeration failed')
    window.location = '../Partials/register.php'
    </script>";
}

echo " <script> alert('Admin user was added successfully')
        window.location = '../'
        </script>";



