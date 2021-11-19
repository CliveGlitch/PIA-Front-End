<?php

try {
$dbuser = 'uotx00rtacgrqzyo';
$dbpass = 'BHN8lGystPZh1xSlHCdF';
$dbhost = 'bdbktl0j0v93z1z3hwdd-mysql.services.clever-cloud.com';
$dbname = 'bdbktl0j0v93z1z3hwdd';
$dbport = '3306'

$conn = new PDO("mysql:host=$dbhost;port=$dbport;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}