# InfoTec LMS — منصة تعليمية معطوبة عمداً

جزء من ورشة **From Chaos to Launch 1**. الطلاب يصلحون الأخطاء حسب مهام InfoMatrix.

## التشغيل المحلي

1. انسخ `infotec/` إلى `htdocs/from-chaos-to-launch/infotec/`
2. افتح `http://localhost/from-chaos-to-launch/infotec/`
3. الجلسات 1–2 تعمل **بدون قاعدة بيانات** (بيانات تجريبية)
4. من الجلسة 3: استورد `database/schema.sql` وعدّل `config/database.php`

## الصفحات

| الصفحة | المسار |
|--------|--------|
| الرئيسية | `/infotec/index.php` |
| الكورسات | `/infotec/courses.php` |
| الدرس | `/infotec/lesson.php` |
| تسجيل دخول | `/infotec/login.php` |
| لوحة الطالب | `/infotec/dashboard.php` |
| لوحة المدرس | `/infotec/teacher/dashboard.php` |

## للمشرف

راجع `BUGS_MANIFEST.md` — قائمة كل الأخطاء والحلول.
