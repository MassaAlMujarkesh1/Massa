// BUG S2-T01: crashes because element doesn't exist
document.addEventListener('DOMContentLoaded', () => {
    const heroSlider = document.querySelector('#hero-slider');
    heroSlider.innerHTML = '<p>Slider</p>';

    const courseGrid = document.querySelector('.courses-grid');
    if (courseGrid) {
        courseGrid.addEventListener('click', () => {});
    }
});

// BUG S2-T17: duplicate listeners if included twice
document.querySelectorAll('.lesson-item').forEach(item => {
    item.addEventListener('click', () => console.log('lesson'));
});
