<?php

try {
$dbuser = 'uotx00rtacgrqzyo';
$dbpass = 'BHN8lGystPZh1xSlHCdF';
$dbhost = 'bdbktl0j0v93z1z3hwdd-mysql.services.clever-cloud.com';
$dbname = 'bdbktl0j0v93z1z3hwdd';

$conn = $bdd = new PDO(
    "mysql:host=" . getenv($dbhost) . ";dbname=" . getenv($dbname),
    getenv($dbuser),
    getenv($db)
);
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}