<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'استعراض الكورسات';
$courses = demo_courses();

require __DIR__ . '/includes/header.php';
?>

<div class="courses-container">
    <h1 class="page-title">جميع الكورسات</h1>

    <!-- حقل البحث مع إضافة id="course-search" وربطه مع الـ Label -->
    <div class="search-box">
        <label for="course-search" class="sr-only">ابحث عن كورس</label>
        <input type="text" id="course-search" class="form-control search-input" 
               placeholder="ابحث عن كورس..." aria-label="ابحث عن كورس">
    </div>

    <!-- شبكة عرض الكورسات -->
    <div class="courses-grid" id="courses-list">
        <?php foreach ($courses as $course): ?>
        <article class="course-card" data-title="<?= e(mb_strtolower($course['title'])) ?>">
            <img src="<?= asset('images/' . e($course['image'])) ?>" alt="<?= e($course['title']) ?>" loading="lazy">
            <div class="course-card-body">
                <h3><?= e($course['title']) ?></h3>
                <p class="teacher">👨‍🏫 <?= e($course['teacher']) ?></p>
                <p class="students-count">👥 <?= (int)$course['students'] ?> طالب</p>
                <div class="meta">
                    <strong class="price"><?= e($course['price']) ?></strong>
                    <a href="/infotec/lesson.php?id=<?= (int)$course['id'] ?>" class="btn btn-subscribe">اشترك الآن</a>
                </div>
            </div>
        </article>
        <?php endforeach; ?>
    </div>

    <!-- رسالة تظهر عندما لا توجد نتائج للبحث -->
    <div id="no-results" class="no-results-message" style="display: none; text-align: center; margin-top: 20px;">
        <p>لا توجد كورسات تطابق بحثك.</p>
    </div>

    <!-- هيكل التحميل (Skeleton Loader) -->
    <div class="skeleton-card" aria-hidden="true"></div>
</div>

<?php
$extraJs = ['course.js'];
require __DIR__ . '/includes/footer.php';