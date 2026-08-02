<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

if (!infotec_user()) {
    header('Location: /infotec/login.php');
    exit;
}

$user = infotec_user();
$pageTitle = 'لوحة الطالب';

require __DIR__ . '/includes/header.php';
?>

<h1>مرحباً، <?= e($user['name']) ?> 👋</h1>
<p style="margin:1rem 0">لوحة تحكم الطالب — تحت الإصلاح</p>

<div class="dashboard-grid" style="margin-top:1.5rem">
    <div class="panel">
        <h3>كورساتي</h3>
        <ul style="margin-top:1rem;padding-right:1.2rem">
            <li>مقدمة في الذكاء الاصطناعي — 25%</li>
            <li>تطوير الويب الحديث — 10%</li>
        </ul>
        <div class="progress-bar"><div class="fill"></div></div>
    </div>
    <div class="panel">
        <h3>إحصائيات</h3>
        <p>ساعات الدراسة هذا الأسبوع: <strong>--</strong></p>
        <!-- BUG S2-T15: Chart.js not loaded -->
        <canvas id="study-chart" width="300" height="150" style="margin-top:1rem;background:#eee"></canvas>
    </div>
    <div class="panel">
        <h3>العلامات</h3>
        <table style="width:100%;margin-top:1rem;font-size:0.85rem">
            <tr><th>كورس</th><th>العلامة</th></tr>
            <tr><td>AI 101</td><td>--</td></tr>
        </table>
    </div>
    <div class="panel">
        <h3>أوسمتي</h3>
        <p>🏅 قريباً...</p>
        <a href="/infotec/badges.php">عرض الكل</a>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
