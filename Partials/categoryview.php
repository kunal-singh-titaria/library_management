<?php

session_start();
include ('../Actions/functions.php');
if(!isset($_POST['category'])){
    echo "
    <script> 
        window.location='../'
    </script>
    ";
}

if(!isset($_SESSION['bookit-username'])){
    echo "
    <script> 
        alert('Need to login before going further')
        window.location='../'
    </script>
    ";
}
$username = $_SESSION['bookit-username'];
$categories = $_POST['category'];
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-It</title>
    <link rel="stylesheet" href="../Assets/styling/book.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--Navigation-->
<div class="nav-container">
    <nav class="navbar">
        <h1 class="nav-heading">Book-IT</h1>
<?php
    if($username){
//            Username if found in the session so display the username and the button to logout
    ?>
            <div class="nav-content">
    Welcome back : <?php echo $username ?>
    <br>
    <a href="../Actions/logout.php"><button class="nav-button">Logout</button></a>
        <a href="../"><button class="nav-button">Back</button></a>
            </div>

    <?php
}
?>
    </nav>
</div>
<!--Navigation ends-->

<!--Main Category part starts-->
<?php
// Contains the data of the books of the category
    $BooksData = getAllTheBooksForACategory($categories);
?>
<div class="category" id="<?php echo $categories; ?>">
    <h1 class="category-heading"> <?php echo $categories ?> </h1>
    <?php
    //Display the particular books
    for($j=0;$j<count($BooksData);$j++){
        ?>
        <div id="container">
            <div class="product-details">

            <h1><?php echo $BooksData[$j][2] ?></h1>
            <p class="information">Author : <?php echo $BooksData[$j][4] ?> <br>
            Publication :<?php echo $BooksData[$j][5] ?></p>
            <div class="control">
                <form action="./detailview.php" method="post">
                    <input type="hidden" name="book" value="<?php echo $BooksData[$j][0] ?>">
                    <button class="btn"> <span class="buy"> More</span></button>
                </form>
            </div>
            </div>

            <div class="product-image">
                <img src="../Uploads/<?php echo $BooksData[$j][3]?>" alt="">

            </div>
        </div>

        <?php
    }
    ?>
</div>
<!--Main Category part ends-->

<!--Copyright starts-->

<!--Copyright ends-->

</body>
</html>
