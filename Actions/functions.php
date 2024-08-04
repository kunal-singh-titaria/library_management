<?php
include ('connect.php');

//Done
// verified
function checkDuplicateUserByUsername($username){
    /*
     * return : true  if no user is present with such username
     *  else : return false
     *
     *
     * required before adding a new user in database
     * */
    $query = "select id,username,email from `user` where username='$username';";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return true;
    }
    return false;

}
//Done
//verified
function addUserToTheDatabase($username,$password,$email){
    /*
     * return : true if user is added successfully
     *  else: return false
     *
     *
     * Adding the user to the database
     *
     * check if it already exists using checkDuplicateUserByUsername($username)
     * */
//    TO verify whether the username is unique or not
    $verify = checkDuplicateUserByUsername($username);
    if($verify){
        return false;
    }
    $query = "insert into user (username,password,email) values ('$username','$password','$email')";
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}
//done
// verified
function checkUserByUsernameAndPassword($username,$password){
    /*
     * return : data if user is present with the $username and $password
     *  else : false
     *
     * */
    $query = "select id,username,email from `user` where username='$username' and password = '$password'";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;
}


/*
 * Function to display the books to the user
 * */

//done
//verified
function getAllTheCategoriesOfBooks(){
    /*
     * return :
     *  all the distinct categories in the book database
     *
     * query user : SELECT DISTINCT(category) FROM `books`;
     *
     * */
    $query = "SELECT DISTINCT(category) FROM `books`";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data;
    }
    return false;

}
//done
//verified
function getAllTheBooksForACategory($category){
    /*
     * return :
     *  books of a category from the books table to the user
     *
     * SQL query : SELECT * FROM `books` where category='';
     * */

    $query = "SELECT * FROM `books` where category='$category'";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data;
    }
    return false;

}
//done
//verified
function getBookDetailsById($id){
    /*
     * return :
     *  All the details of the book by the given id
     *
     * */
    $query = "SELECT * FROM `books` where id = $id";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;
}
