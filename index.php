<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'InfoTec — منصة تعليمية';
$extraJs = ['counters.js', 'theme.js'];
$courses = demo_courses();

require __DIR__ . '/includes/header.php';
?>

<section class="hero">
    <h1>مرحباً بكم في InfoTec</h1>
    <p>منصة تعليمية ذكية — حالياً تحت الإصلاح ⚠️</p>
    <button id="theme-toggle" class="theme-toggle" type="button">🌙 وضع ليلي</button>
</section>

<div class="stats-row">
    <div class="stat-box">
        <div class="num" data-counter="250">100</div>
        <div>طالب</div>
    </div>
    <div class="stat-box">
        <div class="num" data-counter="48">100</div>
        <div>كورس</div>
    </div>
    <div class="stat-box">
        <div class="num" data-counter="12">100</div>
        <div>مدرس</div>
    </div>
</div>

<section class="about-section">
    <h2>من نحن</h2>
    <p>InfoTec منصة تعليمية تهدف لتقديم أفضل تجربة تعلم رقمية للطلاب الجامعيين. نقدم كورسات في الذكاء الاصطناعي، البرمجة، والأمن السيبراني.</p>
</section>

<h2 style="margin-bottom:1rem">أحدث الكورسات</h2>
<div class="courses-grid">
    <?php foreach (array_slice($courses, 0, 3) as $course): ?>
    <article class="course-card">
        <!-- BUG S1-T03: broken image paths -->
        <img src="<?= asset('images/' . e($course['image'])) ?>" alt="<?= e($course['title']) ?>">
        <div class="course-card-body">
            <h3><?= e($course['title']) ?></h3>
            <p class="teacher"><?= e($course['teacher']) ?></p>
            <div class="meta">
                <span><?= e($course['price']) ?></span>
                <a href="/infotec/courses.php" class="btn-subscribe">اشترك الآن</a>
            </div>
        </div>
    </article>
    <?php endforeach; ?>
</div>

<!-- BUG S2-T09: welcome modal forced hidden -->
<div id="welcome-modal" style="display:none;position:fixed;inset:0;background:rgba(0,0,0,0.5);z-index:1000">
    <div style="background:white;padding:2rem;margin:20% auto;max-width:400px;text-align:center">
        <h3>مرحباً في InfoTec!</h3>
        <button onclick="this.parentElement.parentElement.style.display='none'">إغلاق</button>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
$extraJs = ['counters.js', 'theme.js'];
