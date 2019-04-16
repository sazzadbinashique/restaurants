<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>La pizzeria</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
   <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">

                <img src="<?php echo get_template_directory_uri() ?>/img/logo.svg" class="logoimage">
            </a>
        </div>
        <div class="header-information">
            <div class="socials">
                <?php
                    $argc = array(
                        'theme_location'=> 'social-menu', 
                        'container' => 'nav',
                        'container_class'=> 'socials',
                        'container_id' => 'socials',
                        'link_before' => '<span class="sr-text">',
                        'link_after' => '</span>'
                    );
                    wp_nav_menu($argc);
                ?>
            </div>
            <div class="address">
                <p>2323 Bay Avenue Mountain view, CA 132134234</p>
                <p>Phone Numebr: +8801744938010</p>
            </div>
        </div>
   </div>
</header>
<div class="main-menu">
    <div class="mobile-menu">
        <a href="#" class="mobile"><i class="fa fa-bars"></i>Menu</a>
    </div>
    <div class="navigation container">
        <?php
            $argc = array(
                'theme_locations' => 'header-menu', 
                'container' => 'nav',
                'container_class'=> 'site-nav'
            );
            wp_nav_menu($argc); 
        ?>
    </div>
</div>