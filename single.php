<?php get_header() ?>

<!--Main layout-->
<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <section class="text-center">

            <div class="row">

            <?php
                if(have_posts()):
                while(have_posts()) : the_post();
            ?>

                <div class="col-lg-12 col-md-12 mb-4">
                <?php 
                    if (has_post_thumbnail()) { 
                        $thumbnail_id = get_post_thumbnail_id();
                        $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                        <img class="mb-5" src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" class="img-fluid" alt="<?php if($alt_text){ echo esc_html($alt_text); } ?>" />
                <?php 
                    } 
                ?>
                    <h2 class="mb-2"><strong><?php esc_html(the_title()); ?></strong></h2>
                    <p class="mb-5">Publicado em: <?php echo esc_html(date_i18n('d \d\e F \d\e Y', strtotime(get_the_date()))); ?></p>
                    <div style="text-align:left;"><?php echo the_content(); ?></div>
                </div>
            
            <?php
                endwhile;
                else: 
            ?>
                <p>Nada para ser mostrado aqui...</p>
            <?php endif; ?>

            </div>

        </section>
        <!--Section: Content-->
    </div>
</main>

<?php get_footer() ?>
