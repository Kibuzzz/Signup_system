<?php

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_name = 'signup_db';
$dsn = "mysql:host=$db_host;dbname=$db_name";

try {
    $pdo = new PDO($dsn, $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
