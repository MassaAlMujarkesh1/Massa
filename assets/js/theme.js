// BUG S2-T01 / S1-T02: Dark mode toggle broken
function toggleTheme() {
    // document.body.classList.toggle('dark-mode');
    console.log('theme toggle disabled');
}

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.querySelector('#theme-toggle');
    if (btn) {
        btn.addEventListener('click', toggleTheme);
    }
    // BUG S2-T13: not saving to localStorage
});
