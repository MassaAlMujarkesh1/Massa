<?php
declare(strict_types=1);
session_start();
unset($_SESSION['infotec_user']);
header('Location: /infotec/login.php');
exit;
