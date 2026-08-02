<?php
declare(strict_types=1);

require_once __DIR__ . '/functions.php';

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

function infotec_user(): ?array
{
    return $_SESSION['infotec_user'] ?? null;
}
