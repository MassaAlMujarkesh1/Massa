<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BUG S5-T09: missing proper meta -->
    <title><?= e($pageTitle ?? 'InfoTec') ?> | منصة تعليمية</title>
    <link rel="stylesheet" href="<?= asset('css/variables.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/typography.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/main.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/courses.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/lesson.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/buttons.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/header.css') ?>">
    <link rel="stylesheet" href="<?= asset('css/toast.css') ?>">
    <?php if (!empty($extraCss)): foreach ((array)$extraCss as $css): ?>
    <link rel="stylesheet" href="<?= asset('css/' . $css) ?>">
    <?php endforeach; endif; ?>
</head>
<body class="<?= e($bodyClass ?? '') ?>">

<header class="site-header">
    <div class="header-inner">
        <a href="<?= infotec_url('index.php') ?>" class="logo">Info<span>Tec</span></a>
        <nav class="main-nav">
            <a href="<?= infotec_url('index.php') ?>">الرئيسية</a>
            <a href="<?= infotec_url('courses.php') ?>">الكورسات</a>
            <a href="<?= infotec_url('dashboard.php') ?>">لوحتي</a>
            <!-- BUG S1-T09: search missing -->
            <a href="<?= infotec_url('login.php') ?>" class="btn-login">تسجيل الدخول</a>
        </nav>
        <span class="user-label">زائر</span>
    </div>
</header>
<main class="site-main">
