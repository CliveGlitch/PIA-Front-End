<?php
 
if (isset($_POST["SUBMIT"])){
    echo "It Works";
} else {
    header("location: ../SignUp.php");
}
