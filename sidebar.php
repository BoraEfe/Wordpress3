<aside class="sidebar">
    <h3>Sidebar</h3>

    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <?php dynamic_sidebar('sidebar-1'); ?>
    <?php else : ?>
        <p>Geen widgets toegevoegd.</p>
    <?php endif; ?>
</aside>
