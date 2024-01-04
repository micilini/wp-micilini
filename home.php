<?php get_header() ?>

<?php require('classes/config.php'); ?>

<section class="home-section">
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
            <?php
                $customImageID = get_theme_mod('setting_customhomeimage', 0);

                if($customImageID != 0 && $customImageID != ''){
                    $customImageURL = esc_url(wp_get_attachment_image_src($customImageID, 'full')[0]);
            ?>
                <img src="<?php echo $customImageURL; ?>" class="d-block mx-lg-auto img-fluid" alt="Imagem do Hero" width="700" height="500" loading="lazy">
            <?php
                }else{
            ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/wp-micilini-robot-home.png' ?>" class="d-block mx-lg-auto img-fluid" alt="Imagem do Hero" width="700" height="500" loading="lazy">
            <?php
                }
            ?>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-2 mb-3"><?php echo wp_kses(get_theme_mod('setting_customtitle', 'Diga <span style="color:#e67e22;">Olá</span> para a <br><span style="color:#3498db;">WP-Micilini</span> 😝'), $allowedTags); ?></h1>
                <p class="lead"><?php echo wp_kses(get_theme_mod('setting_customdescription', 'Um tema simples para blogs, feito com muito carinho pelo Portal da Micilini.'), $allowedTags); ?></p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <a href="<?php echo esc_url(get_theme_mod('setting_customlinkurl', '#home')); ?>" target="<?php echo esc_html(get_theme_mod('setting_customlinktarget')); ?>" class="btn btn-primary btn-lg px-4 me-md-2"><?php echo esc_html(get_theme_mod('setting_customlinktitle', 'Acessar Portal')); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Main layout-->
<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <section class="text-center">
            <h4 class="mb-5"><strong>Últimos Posts</strong></h4>

            <div class="row">

            <?php
                if(have_posts()):
                while(have_posts()) : the_post();
            ?>

                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay" data-mdb-ripple-init data-mdb-ripple-color="light">
                            <?php 
                            if (has_post_thumbnail()) { 
                                $thumbnail_id = get_post_thumbnail_id();
                                $alt_text = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                            ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url()) ?>" class="img-fluid-wpmicilini" alt="<?php if($alt_text){ echo esc_html($alt_text); } ?>" />
                            <?php 
                            } 
                            ?>
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php esc_html(the_title()); ?></h5>
                            <p class="card-text">
                                <?php echo esc_html(the_excerpt()); ?>
                            </p>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-primary" data-mdb-ripple-init>Ler Artigo 📖</a>
                        </div>
                    </div>
                </div>
            
            <?php
                endwhile;
                else: 
            ?>

                <p>Nada para ser mostrado aqui...</p>
            
            <?php endif; ?>

            <div class="pagination"><?php echo paginate_links() ?></div>

            </div>

        </section>
        <!--Section: Content-->
    </div>
</main>

<?php get_footer() ?>