<?php

include ('connect.php');

/*
 * User related functions
 * */
//TODO
function checkDuplicateUserInAdminTable($username){
    /*
     * return :
     *      true - if duplicate user if found
     *      false - if duplicate if not found
     * */
    $query = "select id from `adminuser` where username='$username';";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return true;
    }
    return false;

}
//TODO
function addAdminUserToTheDatabase($username,$password,$email,$addedby){
    /*
     * return :
     *      true - if admin user is added successfully
     *      false - if admin user is not add
     *
     * function to add the user to the database
     * SQL query - insert into `adminuser` (username,password,email,addedby) values ('','','','');
     *
     * other function used -> checkDuplicateUserInAdminTable()
     *      check the duplicate value before adding the admin user
     * */
//    Verify the duplicate entry
    $verify = checkDuplicateUserInAdminTable($username);
    if($verify){
        return false;
    }
//    Add the user as no duplicate entry found
    $query = "insert into `adminuser` (username,password,email,addedby) values ('$username','$password','$email','$addedby');";
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}
//verified
function checkUserByUsernameAndPassword($username,$password){
    /*
     * return :
     *      true - if user of found
     *      false - if user is not found
     *
     * function to login the user
     * other function used ->
     * */
    $query = "select id,username,email from `adminuser` where username='$username' and password = '$password'";
    $result = mysqli_query($GLOBALS['con'],$query);

    $data =  mysqli_fetch_all($result);
    if($data){
        return $data[0];
    }
    return false;
}




/*
 * Data related functions
 * */

function getTotalBooks(){
/*
 * return : total books in the database
 *
 * need to return the total books listed in the database
 *
 * */
    $query = 'select count(id) from `books`';
    $result = mysqli_query($GLOBALS['con'],$query);
    $data =  mysqli_fetch_all($result);

    return $data[0][0];
}

function getTotalCategory(){
    /*
     * return : total distinct categories in the database
     *
     * need to return the distinct book categories
     * */

    $query = 'select count(DISTINCT(category)) from `books`;';
    $result = mysqli_query($GLOBALS['con'],$query);
    $data =  mysqli_fetch_all($result);

    return $data[0][0];

}

function addBookDataToTheDatabase(
    $bookName,$category,$author,$publication,$year,$photo,$link
){
    /*
     * return : true if data is added successfully
     *          else: false if data is not added successfully
     *
     * adding the book data to the database
     * */
        $query = "insert into books (
                   category,bookname,image,bookauthor,bookpublication,bookyear,link
                   ) 
                    values (
                            '$category','$bookName','$photo','$author','$publication','$year','$link'
                    ) ";
    $result = mysqli_query($GLOBALS['con'],$query);
    if($result){
        return true;
    }

    return false;
}
