<?php

$name = $_POST["name"];
$autor = $_POST["autor"];
$rezension = $_POST["rezension"];
$starrating = filter_input(INPUT_POST, "starrating", FILTER_VALIDATE_INT);
$gattung = filter_input(INPUT_POST, "gattung", FILTER_VALIDATE_INT);
$status = filter_input(INPUT_POST, "status", FILTER_VALIDATE_INT);
 

$host = "db";
$dbname = "PHPBuch";
$username = "root";
$password = "rootpassword";
        
$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO buchtabelle (name, autor, rezension, starrating, gattung, status)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "ssbiii",
                       $name,
                       $autor,
                       $rezension,
                       $starrating,
                       $gattung,
                       $status);

mysqli_stmt_execute($stmt);

echo "Buch gespeichert.";