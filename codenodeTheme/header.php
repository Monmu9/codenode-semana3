

<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="header-inner">
        <h1 class="site-title">
            <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <nav class="site-nav">
            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'menu-principal', 'container' => false)); ?>
        </nav>
        <a href="<?php echo wc_get_cart_url(); ?>" class="header-carrito">
            🛒 <span><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        </a>
    </div>
</header>