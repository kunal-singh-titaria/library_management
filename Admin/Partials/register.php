<?php
session_start();
if(!isset($_SESSION['bookit-admin-user'])){
    header("Location:login.php");
}
?>

<html>
<head>
    <title>Admin-login</title>
</head>
<body>
<h1>Register </h1>
<form action="../Actions/register.php" method="post">

    <input type="text" name="username" placeholder="Enter username" required>
    <br>
    <br>
    <input type="password" name="password" placeholder="Enter password" required>
    <br>
    <br>
    <input type="email" name="email" placeholder="Enter the email" required>
    <br>
    <br>
    <button>Register</button>
</form>
</body>
</html>
