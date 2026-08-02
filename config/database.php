<?php
declare(strict_types=1);

// BUG S3-T03: wrong credentials on purpose
$host = 'localhost';
$dbname = 'infotec_db';
$user = 'wrong_user';
$pass = 'wrong_pass';
$charset = 'utf8mb4';

$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    $pdo = null;
    $db_error = $e->getMessage();
}
