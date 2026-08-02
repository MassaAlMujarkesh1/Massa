<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'الملف الشخصي';

require __DIR__ . '/includes/header.php';
?>

<h1>الملف الشخصي</h1>
<div class="panel" style="margin-top:1.5rem;max-width:500px">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>الصورة الشخصية</label>
            <input type="file" name="avatar">
        </div>
        <div class="form-group">
            <label>الاسم</label>
            <input type="text" class="form-control" value="طالب">
        </div>
        <button type="submit" class="btn">حفظ</button>
    </form>
    <div class="profile-dropdown" style="margin-top:2rem">
        <button>القائمة ▼</button>
        <div class="dropdown-menu">
            <a href="/infotec/dashboard.php">لوحتي</a>
            <a href="/infotec/logout.php">خروج</a>
        </div>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
