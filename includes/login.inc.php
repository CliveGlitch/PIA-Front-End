<?php
 
if (isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputLogIn($username, $pwd) !== false){
        header("location: ../LogIn.php?error=emptyinput");
        exit();
    }

    logInUser($conn, $username, $pwd);

} else {
    header("location: ../LogIn.php");
    exit();
}