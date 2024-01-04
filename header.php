<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 
    <header class="navbar-header" style="background-color: <?php echo sanitize_hex_color(get_theme_mod('setting_customheadercolor', '#333333')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 col-logo">
                <?php
                $customLogoID = get_theme_mod('setting_customlogo', 0);

                if($customLogoID != 0 && $customLogoID != ''){
                    $customLogoURL = esc_url(wp_get_attachment_image_src($customLogoID, 'full')[0]);
                    
                ?>
                    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo $customLogoURL; ?>" alt="<?php echo esc_html(get_post_meta($customLogoID, '_wp_attachment_image_alt', true)); ?>" height="<?php echo intval(get_theme_mod('setting_customheightlogo', 55)); ?>" /></a>
                <?php
                }else{
                ?>
                    <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/img/logo-wpmicilini-white.png' ?>" alt="Logo do WP-Micilini" height="<?php echo intval(get_theme_mod('setting_customheightlogo', 55)); ?>" /></a>
                <?php
                }
                ?>
                </div>
                <div class="col-lg-6 col-md-6 col-12 col-menu">
                    <?php wp_nav_menu(array('theme_location' => 'wp_micilini_header_menu', 'depth' => 1, 'container_class' => 'menu-container')); ?>
                </div>
            </div>
        </div>
    </header>