</main>
<footer class="site-footer">
    <div class="footer-inner">
        <p>InfoTec — منصة تعليمية © 2026</p>
        <p class="footer-small">تحت الإصلاح بواسطة فرق InfoMatrix</p>
    <!-- BUG S1-T08: unclosed div below breaks layout -->
    <div class="footer-links">
        <a href="/infotec/help.php">مساعدة</a>
</footer>
<script src="<?= asset('js/main.js') ?>"></script>
<script src="<?= asset('js/theme.js') ?>"></script>
<?php if (!empty($extraJs)): foreach ((array)$extraJs as $js): ?>
<script src="<?= asset('js/' . $js) ?>"></script>
<?php endforeach; endif; ?>
</body>
</html>
