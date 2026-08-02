<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'العلامات';

require __DIR__ . '/includes/header.php';
?>

<h1>علاماتي</h1>
<div style="overflow-x:auto;margin-top:1.5rem">
    <!-- BUG S1-T09: table not responsive on mobile -->
    <table style="width:100%;min-width:600px;border-collapse:collapse">
        <thead>
            <tr style="background:var(--card-bg)">
                <th style="padding:12px;border:1px solid var(--border)">الكورس</th>
                <th style="padding:12px;border:1px solid var(--border)">الاختبار</th>
                <th style="padding:12px;border:1px solid var(--border)">العلامة</th>
            </tr>
        </thead>
        <tbody>
            <tr><td style="padding:10px;border:1px solid var(--border)">AI 101</td><td style="padding:10px">Quiz 1</td><td>--</td></tr>
            <tr><td style="padding:10px;border:1px solid var(--border)">Web Dev</td><td style="padding:10px">Final</td><td>--</td></tr>
        </tbody>
    </table>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
