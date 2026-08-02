<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/config/database.php';

$pageTitle = 'لوحة المدرس';

require __DIR__ . '/includes/header.php';
?>

<h1>لوحة تحكم المدرس</h1>
<p style="margin:1rem 0;color:var(--text-secondary)">إدارة الكورسات والدروس</p>

<div class="dashboard-grid">
    <div class="panel">
        <h3>كورساتي</h3>
        <p style="margin:1rem 0">3 كورسات — عرض واحد فقط (BUG S4-T04)</p>
        <ul><li>مقدمة في AI</li></ul>
        <button class="btn" type="button" onclick="document.getElementById('add-modal').style.display='block'">+ إضافة كورس</button>
    </div>
    <div class="panel">
        <h3>الطلاب المسجلون</h3>
        <p>العدد: -- (أصلح JOIN)</p>
    </div>
</div>

<div id="add-modal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:100">
    <div class="panel" style="margin:10% auto;max-width:400px">
        <h3>إضافة درس جديد</h3>
        <form method="post">
            <input type="text" class="form-control" placeholder="عنوان الدرس" style="margin:1rem 0">
            <button type="submit" class="btn">حفظ</button>
        </form>
    </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
