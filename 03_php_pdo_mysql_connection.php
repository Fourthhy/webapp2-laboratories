<?php

$host = "localhost";
$dbname = "test";
$user = "root";
$password = "";

$dsn = "mysql:host=$host; dbname=$dbname; charset=UTF8";
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, $user, $password, $options);

    if ($pdo) {
        echo "Connected to $dbname databse";
    }
} catch (PDOException $e) {
    $e->getMessage();
}

?>