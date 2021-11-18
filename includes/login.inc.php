<?php
 
if (isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    header("location: ../index.php");
    exit();

} else {
    header("location: ../index.php");
    exit();
}