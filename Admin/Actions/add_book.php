<?php
include ('functions.php');

$bookName = $_POST['book_name'];
$category = $_POST['category'];
$author = $_POST['author'];
$publication = $_POST['publication'];
$year = $_POST['year'];
$link = $_POST['link'];

// Photo
$photo = $_FILES['photo']['name'];
$tempphoto = $_FILES['photo']['tmp_name'];

// to move the Book file
move_uploaded_file($tempphoto,"../../Uploads/$photo");

echo "<script>
alert('file was successfully moved')
    </script>

";


// adding to the database
/*
 *
function addBookDataToTheDatabase($bookName,$category,$author,$publication,$year,$photo){

 * */
$status = addBookDataToTheDatabase($bookName,$category,$author,$publication,$year,$photo,$link);

if(!$status){
//    Unable to add the book
    echo "<script>
        alert('unable to add the data , please try again later')
        window.location='../';
    </script>

";
}
// Book was added successfully

echo "<script>
        alert('Book was added successfully')
        window.location='../';
    </script>

";