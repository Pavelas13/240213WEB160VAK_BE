<!DOCTYPE html>
<html lang="lt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projektinis darbas</title>

    <?php wp_head(); ?>
</head>

<body>

<?php

if (is_front_page()) {

?>

<div class="header" style="background-image: url(<?php the_field('main_header_image', 'option'); ?>);">
        <div class="container">
            <nav>
                <div class="menu">
                    <a href="#">
                        <img src="<?php the_field('logo', 'option') ?>" alt="logo">
                    </a>

                    <!-- $menu = wp_get_nav_menu_items('header-menu');
          foreach ($menu as $menuItem) {
            echo '<li><a href="' . $menuItem->úrl . '">' . $menuItem->title . '</a></li>';
          } -->




                    
                    <?php echo strip_tags(
                        wp_nav_menu([
                            'menu' => 'header-menu',
                            'container'       => false,
                            'items_wrap'      => '%3$s',
                            'depth'           => 0,
                        ]),
                        '<a>'
                    ); ?>

                    <!-- <a href="<?php echo get_permalink(48); ?>">About</a>
                    <a href="#">Drift Academy</a>
                    <a href="#">Shop</a>
                    <a href="#">Contacts</a> -->
                </div>
                <div class="toolbox">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon_search.png" alt="search">
                    </a>
                    <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_heart.png" alt="heart">
                    </a>
                    <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_bag.png" alt="bag">
                    </a>
                    <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_account.png" alt="account">
                    </a>
                </div>

            </nav>

        </div>
        <div class="container hero-content">
            <div class="rectangle">
                <p class="upper-text">“Turtle”</p>
                <h2 class="nissan">nissan <br> 180sx</h2>
                <p class="bottom-text">Engine/Power: 2JZ / 850 HP <br>Gearbox: Sequential, 5 levels <br>Weight: 1060 kg
                </p>
            </div>

            <div class="drift">
                <h1>Born<br>to drift</h1>
            </div>
        </div>

        <div class="container hero-bottom">
            <div class="language">
                <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Group 167.png" alt="ENG">  
                </a>
                <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/Group 166.png" alt="LT">  
                </a>
            </div>

            <div class="social-media">
                <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_youtube.png" alt="youtube">  
                </a>
                <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_instagram_white.png" alt="instagram">  
                </a>
                <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_facebook_white.png" alt="facebook">  
                </a>
            </div>

        </div>

    </div>

<?php } else { ?>

<div class="page-header">

    <div class="container2">
        <nav>
            <div class="menu">
                <a href="#">
                <img src="<?php the_field('logo', 'option') ?>" alt="logo">
                </a>
                <a href="#">About</a>
                <a href="#">Drift Academy</a>
                <a href="#">Shop</a>
                <a href="#">Contacts</a>
            </div>
            <div class="toolbox">
                <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon_search.png" alt="search">
                    </a>
                    <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_heart.png" alt="heart">
                    </a>
                    <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_bag.png" alt="bag">
                    </a>
                    <a href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon_account.png" alt="account">
                </a>
            </div>

        </nav>

    </div>

</div>

<?php } ?>