<?php
session_start();
$username = null;
$email=null;
$id=null;

if(isset($_SESSION['bookit-username'])){
    $username = $_SESSION['bookit-username'];
    $id = $_SESSION['bookit-id'];
    $email = $_SESSION['bookit-email'];
}
include ('./Actions/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-It</title>
<!--    For main styling -->
    <link rel="stylesheet" href="./Assets/styling/main.css">

    <link rel="stylesheet" href="./Assets/styling/container.css">

</head>
<body>
    <div class="nav-container">
    <nav class="navbar">
        <h1 class="nav-heading">Book-IT</h1>
        <?php
        //    Navigation for the user
        if($username){
//            Username if found in the session so display the username and the button to logout
            ?>
                <div class="nav-content">
            <div class="text">
            Welcome back : <?php echo $username ?>
            </div>
<!--            <br>-->
            <a href="./Actions/logout.php"><button class="nav-button logout">Logout</button></a>

                </div>
            <?php
        }else{
//            No user is found , so link to login
            ?>
                <div class="nav-content">
            <a href="./Partials/login.php"><button class="nav-button login">Login</button></a>

            <br>
            <br>
            <a href="./Partials/register.php"><button class="nav-button register">Register</button></a>
                </div>
            <?php
        }
        ?>
    </nav>
    </div>


<!--Section to display the Books-->
    <div class="main--section--books">


<h1 class="heading">Categories</h1>
    <?php
//    Get all the categories
    $categories = getAllTheCategoriesOfBooks();
    if(!$categories){
        ?>
        <div class="nobookfound">
            <h5>Soory no books available at this time</h5>
        </div>
    <?php
    }else{
        ?>
        <section class="main-section">
            <?php
            //        Need to get a book category from the database and display it in the div
            for($i=0;$i<count($categories);$i++){
//        Get the books for categories : $categories[$i][0]
//            $BooksData contains the details of the books of a category
                ?>
                <div class="container main-category">
                    <div class="content">

                       <h1> <?php echo $categories[$i][0] ?> </h1>
                        <h3>Content of the Category</h3>
                        <form action="./Partials/categoryview.php" method="post">
                            <input type="hidden" name="category" value="<?php echo $categories[$i][0] ?>">
                            <button class="form-button">More</button>
                        </form>
                        </div>
                    <div class="flap"></div>
                </div>
            <?php
            }
            ?>
        </section>
        <?php
    }
    ?>

    </div>


</body>
</html>