<?php

$host = "db";
$dbname = "PHPBuch";
$username = "root";
$password = "rootpassword";

$mysqli = new mysqli(hostname: $host,
                     username: $username,
                     password: $password,
                     database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;