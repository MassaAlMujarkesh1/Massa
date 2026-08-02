<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/config/database.php';

$pageTitle = 'إدارة المنصة';

require __DIR__ . '/includes/header.php';
?>

<h1>لوحة المشرف</h1>
<?php if (isset($db_error)): ?>
<div class="alert alert-error">خطأ قاعدة البيانات: <?= e($db_error) ?></div>
<?php endif; ?>

<div class="panel" style="margin-top:1rem">
    <h3>المستخدمون</h3>
    <p>الاتصال بقاعدة البيانات معطل — أصلح config/database.php</p>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
