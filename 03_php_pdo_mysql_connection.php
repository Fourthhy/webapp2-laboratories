<?php

$host = "localhost";
$dbname = "test";
$user = "root";
$password = "";

$dsn = "mysql:host=$host; dbname=$dbname; charset=UTF8"; 

try {
    $pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    $databaseName = "webapp2db";
    $sql = "CREATE DATABASE $databaseName";

    $pdo->exec($sql);
    echo "Created $databaseName database Successful <br>";

    $dsn2 = "mysql:host=$host; dbname=$databaseName; charset=UTF8";
    $pdo2 = new PDO($dsn2, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    if ($pdo2) {
        echo "Connected to $databaseName database successfully";
    }
    
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>
