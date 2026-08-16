/**
 * Script Guard & Duplicate Event Listener Prevention
 * Fixes: Prevent duplicate execution when script is included multiple times
 */

(function () {
    // 1. Guard Flag: الحماية على مستوى السكربت لمنع التكرار عند التضمين المزدوج
    if (window.__countersScriptInitialized) {
        console.warn('Counters script already loaded. Preventing duplicate initialization.');
        return;
    }
    window.__countersScriptInitialized = true;

    function initCounters() {
        const counters = document.querySelectorAll('[data-counter]');
        
        counters.forEach(counter => {
            // 2. Element Level Guard: التأكد من أن هذا العنصر لم يتم ربطه مسبقاً
            if (counter.dataset.initialized) return;
            counter.dataset.initialized = 'true';

            // إضافة المستمع أو المنطق الخاص بالعنصر بحماية وأمان
            // مثال على ربط الحدث بحماية:
            counter.addEventListener('click', function () {
                console.log('Counter clicked safely once!');
            });
        });
    }

    // التأكد من استدعاء التهيئة سواء كان DOM جاهزاً أم تم تحميله بالفعل
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCounters);
    } else {
        initCounters();
    }
})();