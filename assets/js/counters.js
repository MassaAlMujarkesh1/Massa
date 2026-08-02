// BUG S2-T09: counter starts at 100
document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[data-counter]').forEach(el => {
        let count = 100;
        const target = parseInt(el.dataset.counter, 10);
        const timer = setInterval(() => {
            count++;
            el.textContent = count;
            if (count >= target + 100) clearInterval(timer);
        }, 50);
    });
});
