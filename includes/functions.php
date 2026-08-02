<?php
declare(strict_types=1);

function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function infotec_base(): string
{
    static $base;
    if ($base !== null) {
        return $base;
    }
    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    if (preg_match('#(/.*?/infotec)(?:/|$)#', $script, $m)) {
        return $base = $m[1];
    }
    if (preg_match('#(/infotec)(?:/|$)#', $script, $m)) {
        return $base = $m[1];
    }
    return $base = '/from-chaos-to-launch/infotec';
}

function asset(string $path): string
{
    return infotec_base() . '/assets/' . ltrim($path, '/');
}

function infotec_url(string $path = ''): string
{
    $base = infotec_base();
    return $path === '' ? $base : $base . '/' . ltrim($path, '/');
}

function infotec_config(): array
{
    static $c;
    return $c ??= require __DIR__ . '/../config/app.php';
}

function demo_courses(): array
{
    return [
        ['id' => 1, 'title' => 'مقدمة في الذكاء الاصطناعي', 'teacher' => 'د. سارة أحمد', 'image' => 'broken-course-1.jpg', 'price' => 'مجاني', 'students' => 128],
        ['id' => 2, 'title' => 'تطوير الويب الحديث', 'teacher' => 'م. خالد يوسف', 'image' => 'broken-course-2.jpg', 'price' => '49$', 'students' => 86],
        ['id' => 3, 'title' => 'أمن المعلومات', 'teacher' => 'د. ليلى حسن', 'image' => 'course-3.jpg', 'price' => '79$', 'students' => 54],
        ['id' => 4, 'title' => 'هندسة البرمجيات', 'teacher' => 'م. عمر ناصر', 'image' => 'course-4.jpg', 'price' => '59$', 'students' => 92],
    ];
}

function demo_lessons(): array
{
    return [
        ['id' => 1, 'title' => 'الدرس 1: ماذا هو AI؟', 'duration' => '12:30', 'locked' => false],
        ['id' => 2, 'title' => 'الدرس 2: تطبيقات عملية', 'duration' => '18:45', 'locked' => false],
        ['id' => 3, 'title' => 'الدرس 3: أخلاقيات AI', 'duration' => '15:00', 'locked' => true],
        ['id' => 4, 'title' => 'الدرس 4: مشروع نهائي', 'duration' => '25:00', 'locked' => true],
    ];
}
