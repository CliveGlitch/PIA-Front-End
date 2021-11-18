<?php
 
if (isset($_POST["submit"])){

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    header("location: ../log in/indexLogIn.php");
    exit();

} else {
    header("location: ../log in/indexLogIn.php");
    exit();
}
