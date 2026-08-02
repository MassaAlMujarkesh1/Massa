<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'الأوسمة';

require __DIR__ . '/includes/header.php';
?>

<h1>أوسمة الطالب</h1>
<div class="courses-grid" style="margin-top:1.5rem">
    <?php foreach (['متعلم نشط', 'أسبوع كامل', 'خبير AI'] as $badge): ?>
    <div class="panel" style="text-align:center;opacity:0.4">
        <div style="font-size:2rem">🏅</div>
        <h3><?= e($badge) ?></h3>
        <p>مقفل</p>
    </div>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
