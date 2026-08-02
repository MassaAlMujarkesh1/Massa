<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'إنشاء حساب';
$success = '';

if (is_post()) {
    // BUG S3-T05: form doesn't actually save - no DB
    $success = 'تم التسجيل (وهمياً — أصلح الاتصال بقاعدة البيانات!)';
}

require __DIR__ . '/includes/header.php';
?>

<div style="max-width:450px;margin:2rem auto">
    <h1 style="margin-bottom:1.5rem">تسجيل طالب جديد</h1>
    <?php if ($success): ?><div class="alert alert-success"><?= e($success) ?></div><?php endif; ?>

    <form method="post" id="register-form">
        <div class="form-group">
            <label>الاسم الكامل</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>البريد الجامعي</label>
            <input type="email" class="form-control" id="student-email">
            <span id="email-error" style="color:red;display:none">إيميل غير صالح</span>
        </div>
        <div class="form-group">
            <label>كلمة المرور</label>
            <input type="password" class="form-control" id="reg-password">
            <div id="password-strength" style="height:4px;background:#ccc;margin-top:4px"></div>
        </div>
        <button type="submit" class="btn btn-primary" style="width:100%">تسجيل</button>
    </form>
</div>

<?php
$extraJs = ['register.js'];
require __DIR__ . '/includes/footer.php';
