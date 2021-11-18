<?php
 
if (isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    header("location: ../log in/indexLogIn.php");
    exit();

} else {
    header("location: ../log in/indexLogIn.php");
    exit();
}