<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../config/database.php';

$q = $_GET['q'] ?? '';

// BUG S4-T03: SQL Injection
if ($pdo && $q !== '') {
    $sql = "SELECT * FROM courses WHERE title LIKE '%$q%'";
    try {
        $results = $pdo->query($sql)->fetchAll();
    } catch (Throwable $e) {
        $results = [];
    }
} else {
    $results = demo_courses();
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($results, JSON_UNESCAPED_UNICODE);
