<?php
session_start();
?>

<html>
    <head>
        <title>Admin-login</title>
    </head>
<body>
    <h1>Login </h1>
    <form action="../Actions/login.php" method="post">

        <input type="text" name="username" placeholder="Enter username" required>
        <br>
        <br>
        <input type="password" name="password" placeholder="Enter password" required>
        <br>
        <br>
        <button>Login</button>
    </form>
</body>
</html>
