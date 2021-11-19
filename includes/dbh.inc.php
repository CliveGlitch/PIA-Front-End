<?php

try {

    $conn = mysqli_connect(getenv("MYSQL_ADDON_HOST"), getenv("MYSQL_ADDON_USER"), getenv("MYSQL_ADDON_PASSWORD"), getenv("MYSQL_ADDON_DB"));

}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}