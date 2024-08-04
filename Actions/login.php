<?php
session_start();
include ('functions.php');
$username= $_POST['username'];
$password = $_POST['password'];


// TODO: implement function to validate the user creadentials
//to store if the user exists
$userVerification =checkUserByUsernameAndPassword($username,$password);
if(!$userVerification){
//    User is not found , render back the user to login page to retry
    echo "
        <script>
        alert('Unable to find the user with entered credentials , Please try another credentials')
        window.location='../Partials/login.php'
        </script>
    ";
}

// User found
echo "
        <script>
        alert('Login Successful')
        </script>
    ";
// add the username to the session with id of the user
$_SESSION['bookit-username']=$userVerification[1];
$_SESSION['bookit-id']=$userVerification[0];
$_SESSION['bookit-email']=$userVerification[2];
// User found
echo "
        <script>
       window.location='../'
        </script>
    ";


