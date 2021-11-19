<?php

try {

    $conn = new PDO(
        "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    	getenv("MYSQL_ADDON_USER"),
    	getenv("MYSQL_ADDON_PASSWORD")
    );

}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}