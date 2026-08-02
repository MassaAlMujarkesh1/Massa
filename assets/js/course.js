// BUG S2-T02: sidebar toggle not implemented
document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('#sidebar-toggle');
    const sidebar = document.querySelector('.lesson-sidebar');
    if (toggle && sidebar) {
        toggle.addEventListener('click', () => {
            // sidebar.classList.toggle('collapsed');
            alert('Sidebar broken - fix me!');
        });
    }

    // BUG S2-T03: tabs not wired
});
