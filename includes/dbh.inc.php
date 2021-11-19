<?php

try {
    $MYSQL_ADDON_DB="bdbktl0j0v93z1z3hwdd"
    $MYSQL_ADDON_HOST="bdbktl0j0v93z1z3hwdd-mysql.services.clever-cloud.com"
    $MYSQL_ADDON_PASSWORD="BHN8lGystPZh1xSlHCdF"
    $MYSQL_ADDON_PORT="3306"
    $MYSQL_ADDON_URI="mysql://uotx00rtacgrqzyo:BHN8lGystPZh1xSlHCdF@bdbktl0j0v93z1z3hwdd-mysql.services.clever-cloud.com:3306/bdbktl0j0v93z1z3hwdd"
    $MYSQL_ADDON_USER="uotx00rtacgrqzyo"
    $MYSQL_ADDON_VERSION="8.0"

$conn = $bdd = new PDO(
    "mysql:host=$MYSQL_ADDON_HOST;dbname=$MYSQL_ADDON_DB,
    $MYSQL_ADDON_USER, $MYSQL_ADDON_PASSWORD"
);

}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}