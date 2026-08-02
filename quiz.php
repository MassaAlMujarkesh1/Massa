<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'اختبار الكورس';

require __DIR__ . '/includes/header.php';
?>

<h1>اختبار: مقدمة AI</h1>
<form id="quiz-form" style="margin-top:1.5rem;max-width:600px">
    <div class="panel" style="margin-bottom:1rem">
        <p><strong>1.</strong> ما هو الذكاء الاصطناعي؟</p>
        <label><input type="radio" value="a"> محاكاة الذكاء البشري</label><br>
        <label><input type="radio" value="b"> نوع من الفيروسات</label>
    </div>
    <button type="submit" class="btn" id="quiz-submit">تسليم الإجابات</button>
</form>

<script>
// BUG S2-T10: quiz not captured as JSON
document.getElementById('quiz-form').addEventListener('submit', function(e) {
    e.preventDefault();
    alert('الاختبار غير مربوط بالـ Backend');
});
</script>

<?php require __DIR__ . '/includes/footer.php'; ?>
