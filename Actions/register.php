<?php
include ('functions.php');
    $username= $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['useremail'];




$data = addUserToTheDatabase($username,$password,$email);
if($data){
//    User added successfully
    echo " <script> alert('user added successfully') </script> ";
//    Render user to the login page
    echo "
        <script>
            window.location='../Partials/login.php'
        </script>
    
    ";
}else{
//    user is not added to the database
    echo " <script> alert('Unable to add user, Please try again by changing username or email') </script> ";
//    Render user to the register page
    echo "
        <script>
            window.location='../Partials/register.php'
        </script>
    
    ";
}


?>