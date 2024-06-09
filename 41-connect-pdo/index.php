<?php
// connect PDO
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'root';
$password = 'root';

// create DSN string
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    //create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // set PDO to through exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'DB Connected!';
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
