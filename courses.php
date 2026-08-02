<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/auth.php';

$pageTitle = 'استعراض الكورسات';
$courses = demo_courses();

require __DIR__ . '/includes/header.php';
?>

<div class="courses-container">
    <h1 class="page-title">جميع الكورسات</h1>

    <!-- FIX BUG S2-T12: Added id="course-search" for live JS search & accessibility labels -->
    <div class="search-box">
        <label for="course-search" class="sr-only">ابحث عن كورس</label>
        <input type="text" id="course-search" class="form-control search-input" 
               placeholder="ابحث عن كورس..." aria-label="ابحث عن كورس">
    </div>

    <!-- FIX BUG S1-T03: Responsive Grid Layout Container -->
    <div class="courses-grid" id="courses-list">
        <?php foreach ($courses as $course): ?>
        <article class="course-card" data-title="<?= e($course['title']) ?>">
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

    <!-- FIX BUG S1-T08: Animated Skeleton Screen Loading Placeholder -->
    <div class="skeleton-card" aria-hidden="true"></div>
</div>

<?php
$extraJs = ['course.js'];
require __DIR__ . '/includes/footer.php';