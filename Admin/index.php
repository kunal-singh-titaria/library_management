<?php
session_start();
if(!isset($_SESSION['bookit-admin-user'])){
    header("Location:./Partials/login.php");
}



include ('./Actions/functions.php');
$totalBooks = getTotalBooks();
$totalCategory = getTotalCategory();

?>

<html>
    <head>
        <title>Admin - </title>
    </head>
    <body>
        <h1>
            Welcome <?php echo $_SESSION['bookit-admin-user'] ?>
        </h1>
        <?php
            if($_SESSION['bookit-admin-user']){
                ?>
                <a href="./Actions/logout.php"><button>Logout</button></a>
        <?php
            } ?>


        <h3>Add Another admin - <a href="./Partials/register.php"><button>Register new Admin</button></a>  </h3>

        <h3>Total Book listed are : <?php echo $totalBooks?> </h3>
        <h3>Total Category listed are : <?php echo $totalCategory?> </h3>
        <br>
        <br>
<!--        Adding another Book form    -->
        <h2>Add Another Book</h2>
        <form action="./Actions/add_book.php" method="post" enctype="multipart/form-data">
            <input placeholder="Book Category" type="text" name="category" required>
            <br>
            <br>
            <input placeholder="Book Name" type="text" name="book_name" required>
            <br>
            <br>

            <input type="text" name="author" placeholder="Book Author" required>
            <br>
            <br>
            <input type="text" name="publication" placeholder="Book Publication" required>
            <br>
            <br>
            <input type="text" name="year" placeholder="Book Publication Year" required>
            <br>
            <br>
            <input type="file" name="photo" placeholder="Image" required>
            <br>
            <br>
            <input type="text" name="link" placeholder="Link" required>
            <br>
            <br>
            <button>Submit</button>
        </form>
    </body>
</html>
