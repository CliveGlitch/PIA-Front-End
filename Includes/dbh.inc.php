<?php

try {
$dbuser = 'upfiztaofjcvsh';
$dbpass = '0f8b25c1e7d554a6b5ba5469173b82f5366bcbbb81481d812fac6fdcb44cfefb';
$host = 'ec2-3-209-38-221.compute-1.amazonaws.com';
$dbname = 'ddgr9k16th7ack';

$conn = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) {
    echo "Error : " . $e->getMessage() . "<br/>";
    die();
}