<footer id="footer">
    <?php
        $menu_name = 'footer';
        $locations = get_nav_menu_locations();
        $menu = wp_get_nav_menu_object($locations[$menu_name]);
        
        $menu_items = wp_get_nav_menu_items($menu ->term_id);
    ?>
    <div class="footer_item">
        <?php foreach ($menu_items as $item): ?>
            <p class="info">
                <a href="<?php echo $item -> url; ?>"><?php echo $item ->title; ?></a>
            </p>
        <?php endforeach; ?>
    </div>
    <p>
        <small>Copyright: <?php bloginfo( 'name' ) ?></small>
    </p>
</footer>

<?php wp_footer(); ?>
</body>
</html>