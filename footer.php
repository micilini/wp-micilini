<?php require('classes/config.php'); ?>

<footer class="footer-content" style="background-color: <?php echo sanitize_hex_color(get_theme_mod('setting_customfootercolor', '#333333')); ?>">
    <div class="container">
        <div class="row">
            <p class="col-md-4 mb-0 col-copy"><?php echo wp_kses(get_theme_mod('setting_customcopyright', '2023 - 2024 | WP-Micilini, feito com ❤️ pelo &nbsp;<a href="#home">Portal da Micilini</a>'), $allowedTags); ?></p>

            <a href="<?php echo esc_url(home_url()); ?>" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <?php
                $customLogoID = get_theme_mod('setting_customcopylogo', 0);

                if($customLogoID != 0 && $customLogoID != ''){
                    $customLogoURL = esc_url(wp_get_attachment_image_src($customLogoID, 'full')[0]);
                    
                ?>
                    <img src="<?php echo $customLogoURL; ?>" alt="<?php echo esc_html(get_post_meta($customLogoID, '_wp_attachment_image_alt', true)); ?>" height="<?php echo intval(get_theme_mod('setting_customheightcopylogo', 40)); ?>" />
                <?php
                }else{
                ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/logo-rodape.png' ?>" alt="Logo do Rodapé da Micilini" height="<?php echo intval(get_theme_mod('setting_customheightcopylogo', 40)); ?>" />
                <?php
                }
                ?>
            </a>

            <div class="col-md-4 justify-content-end col-menu">
                <?php wp_nav_menu(array('theme_location' => 'wp_micilini_footer_menu', 'depth' => 1, 'container_class' => 'menu-container')); ?>
            </div>
        </div>
    </div>
</footer>

</body>
<?php wp_footer(); ?>
</html>