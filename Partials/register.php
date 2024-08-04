<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookIt-register</title>
    <link rel="stylesheet" href="../Assets/styling/register.css">
</head>
<body>


<div class="container" id="container">

    <div class="form-container sign-in-container">
        <form action="../Actions/register.php" method="post">
            <h1>Sign Up</h1>
            <input type="text" placeholder="Username" name="username" required/>
            <input type="email" placeholder="Email" name="useremail" required/>
            <input type="password" placeholder="Password" name="password" required/>

            <button class="cover">Sign Up</button>
            <a href="../">Back Home</a>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">

            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter book reading with us</p>
                <a href="./login.php"> <button class="ghost cover" id="signUp">Sign In</button></a>
            </div>
        </div>
    </div>
</div>

</body>
</html>