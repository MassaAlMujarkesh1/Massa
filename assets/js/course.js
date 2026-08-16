document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('course-search');
    const courseCards = document.querySelectorAll('#courses-list .course-card');
    const noResultsMessage = document.getElementById('no-results');

    if (!searchInput) return;

    searchInput.addEventListener('input', (e) => {
        const query = e.target.value.trim().toLowerCase();
        let hasVisibleCourses = false;

        courseCards.forEach(card => {
            const title = card.getAttribute('data-title') || '';
            
            // التحقق من احتواء عنوان الكورس على نص البحث
            if (title.includes(query)) {
                card.style.display = '';
                hasVisibleCourses = true;
            } else {
                card.style.display = 'none';
            }
        });

        // إظهار أو إخفاء رسالة عدم وجود نتائج
        if (noResultsMessage) {
            noResultsMessage.style.display = hasVisibleCourses ? 'none' : 'block';
        }
    });
});