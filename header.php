<!DOCTYPE html>

<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="container header-wrapper">
                <div class="main-nav-wrapper">
                    <nav>
                        <ul class="main-nav">
                            <li><a href="/">Home</a></li>
                            <li <?php if(is_page('about')) echo 'class="current-menu-item"' ?>><a href="/about">About</a></li>
                            <li <?php if (get_post_type() == 'event') echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('event'); ?>">Shows</a></li>
                            <li <?php if(is_page('comedy')) echo 'class="current-menu-item"' ?>><a href="/comedy">Comedy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div> 
        </header>
