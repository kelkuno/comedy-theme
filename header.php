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
                    <!-- <div class="logo-wrapper">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/ali-sultan-logo.svg" alt="Ali Sultan Logo" width="185">
                    </div> -->
                    <nav>
                        <ul class="main-nav">
                            <li><a href="#about">About</a></li>
                            <li><a href="#shows">Shows</a></li>
                            <li><a href="#">Watch</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div> 
        </header>
