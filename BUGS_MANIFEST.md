# BUGS_MANIFEST — InfoTec (للمشرف فقط)

دليل الأخطاء العمدية مرتبطة بمهام InfoMatrix. **لا تشاركي هذا الملف مع الطلاب.**

## الجلسة 1 — UI/UX & CSS

| المهمة | الملف | الخطأ | الحل المختصر |
|--------|-------|-------|--------------|
| S1-T01 | `assets/css/variables.css` | ألوان فاقعة (أخضر/وردي) | استبدال بـ palette احترافية dark/blue |
| S1-T02 | `assets/js/theme.js` + `theme.css` | Dark mode معطل | تفعيل `classList.toggle('dark-mode')` + localStorage |
| S1-T03 | `assets/css/courses.css` | `grid-template-columns: 1fr` + margin سالب | `repeat(auto-fill, minmax(280px, 1fr))` |
| S1-T03 | `index.php`, `courses.php` | صور `broken-course-*.jpg` | إصلاح المسارات أو إضافة الصور |
| S1-T05 | `assets/css/lesson.css` | Sidebar لا ينطوي | إكمال `.collapsed` + JS |
| S1-T06 | `assets/css/lesson.css` | z-index فيديو/قائمة | رفع z-index الفيديو أو خفض القائمة |
| S1-T07 | `assets/css/lesson.css` | حقول تعليقات غير منسقة | تنسيق textarea + focus |
| S1-T08 | `includes/footer.php` | `<div>` غير مغلق | إغلاق الـ div قبل `</footer>` |
| S1-T09 | `includes/header.php` | حقل بحث مفقود | إضافة `<input type="search">` |
| S1-T10 | `assets/css/typography.css` | خط 8-9px | أحجام 16px body، تدرج للعناوين |
| S1-T11 | `assets/css/buttons.css` | padding أزرار غير متسق | توحيد padding |
| S1-T18 | `assets/css/toast.css` | Toast مخفي | `top: 20px; opacity: 1; z-index: 9999` |
| S1-T21 | `assets/css/header.css` | dropdown خلف المحتوى | `z-index: 100` للقائمة |

## الجلسة 2 — JavaScript

| المهمة | الملف | الخطأ | الحل المختصر |
|--------|-------|-------|--------------|
| S2-T01 | `assets/js/main.js` | null على `#hero-slider` | فحص `if (heroSlider)` قبل الاستخدام |
| S2-T02 | `assets/js/course.js` | Sidebar alert فقط | `classList.toggle('collapsed')` |
| S2-T03 | `assets/js/course.js` | Tabs غير مربوطة | event listeners على `.tab-btn` |
| S2-T04 | `assets/js/register.js` | لا validation | Regex للإيميل الجامعي |
| S2-T05 | `login.php` | `name` مفقود على email | إضافة `name="email"` |
| S2-T07 | `assets/js/auth.js` | togglePassword فارغة | تبديل `type` password/text |
| S2-T09 | `assets/js/counters.js` | يبدأ من 100 | يبدأ من 0 ويعد حتى target |
| S2-T09 | `index.php` | modal مخفي دائماً | إظهار عند أول زيارة |
| S2-T12 | `courses.php` | live search غير مفعّل | JS filter على `data-title` |
| S2-T13 | `assets/js/theme.js` | لا localStorage | حفظ/قراءة theme |
| S2-T15 | `dashboard.php` | Chart.js غير محمّل | إضافة CDN + رسم بياني |
| S2-T17 | `assets/js/main.js` | event listeners مكررة | DOMContentLoaded مرة واحدة |

## الجلسة 3 — PHP & MySQL

| المهمة | الملف | الخطأ | الحل المختصر |
|--------|-------|-------|--------------|
| S3-T02 | `database/schema.sql` | جداول غير منشأة | تشغيل schema على MySQL |
| S3-T03 | `config/database.php` | `wrong_user` / `wrong_pass` | بيانات XAMPP الصحيحة |
| S3-T05 | `register.php` | لا INSERT فعلي | ربط بـ PDO prepared statement |
| S3-T07 | `login.php` | لا sessions آمنة | password_verify + session |
| S3-T08 | `dashboard.php` | بيانات ثابتة | SELECT من enrollments |
| S3-T13 | `teacher/dashboard.php` | يعرض كورس واحد | إصلاح while/foreach |
| S3-T08 | `database/schema.sql` | passwords نص صريح | password_hash |

## الجلسة 4 — Security

| المهمة | الملف | الخطأ | الحل المختصر |
|--------|-------|-------|--------------|
| S4-T01 | `login.php` | يقبل أي كلمة مرور | password_verify |
| S4-T03 | `includes/search.php` | SQL Injection | Prepared statements |
| S4-T04 | `teacher/dashboard.php` | حلقة تعرض عنصر واحد | إصلاح loop |
| S4-T15 | `.htaccess` | Options -Indexes معطل | تفعيل منع listing |
| S4-T20 | `.htaccess` | لا HTTPS redirect | RewriteRule SSL |

## الجلسة 5 — Deployment

| المهمة | الملف | الخطأ | الحل المختصر |
|--------|-------|-------|--------------|
| S5-T07 | `404.php` | صفحة بسيطة | تحسين التصميم (موجودة جزئياً) |
| S5-T08 | `500.php` | صفحة بسيطة | تحسين التصميم |
| S5-T09 | `includes/header.php` | meta ناقصة | description, viewport OK — أضف OG |
| S5-T21 | `.htaccess` | display_errors on | `php_flag display_errors off` |

---

**ملاحظة:** النسخة المرجعية الصحيحة يمكن استخراجها بتطبيق الحلول أعلاه تدريجياً حسب الجلسة.
