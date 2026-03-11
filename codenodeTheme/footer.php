

<footer>
    <p>© <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'footer',
        'menu_class'     => 'menu-footer',
        'container'      => false,
    ));
    ?>
</footer>

<?php wp_footer(); ?>
</body>
</html>