<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id='page' class='site'>
        <a class='skip-link screen-reader-text' href='#content'>
            <?php esc_html_e('Skip to content', 'sample'); ?>
        </a>
        <button class='to-top' onclick='window.scrollTo({top: 0, behavior: "smooth"});'>
            <span class='dashicons dashicons-arrow-up-alt'></span>
        </button>

        <header class='site-header'>
            <div class="logo">
                <?php
                if (has_custom_logo()) :
                    the_custom_logo();
                else :
                    $blog_info    = get_bloginfo('name');
                    $description  = get_bloginfo('description', 'display');
                    $show_title   = (false === display_header_text());
                    $header_class = $show_title ? 'site-title' : 'screen-reader-text';
                ?>
                    <?php if ($blog_info) : ?>
                        <?php if (is_front_page() && !is_paged()) : ?>
                            <h1 class="<?php echo esc_attr($header_class); ?>">
                                <?php echo esc_html($blog_info); ?>
                            </h1>
                        <?php elseif (is_front_page() && !is_home()) : ?>
                            <h1 class="<?php echo esc_attr($header_class); ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php echo esc_html($blog_info); ?>
                                </a>
                            </h1>
                        <?php else : ?>
                            <h1 class="<?php echo esc_attr($header_class); ?>">
                                <a href="<?php echo esc_url(home_url('/')); ?>">
                                    <?php echo esc_html($blog_info); ?>
                                </a>
                            </h1>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($description && $show_title) : ?>
                        <p class='site-description'>
                            <?php echo esc_html($description); ?>
                        </p>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            <div class="main-menu">
                <?php if (has_nav_menu('main-menu')) : ?>
                    <a class='mobile-btn' tabindex='0'>
                        <span class='dashicons dashicons-menu-alt3'></span>
                    </a>
                    <div class='main-nav'>
                        <div class='close' tabindex='0'><span class='dashicons dashicons-no-alt'></span></div>
                        <?php wp_nav_menu(array(
                            'menu' => 'main-menu',
                            'theme_location' => 'main-menu',
                            'menu_class' => 'menu',
                            'container' => 'ul'
                        ));
                        ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="search-box">
                <?php get_search_form(); ?>
            </div>
        </header>
        <main>