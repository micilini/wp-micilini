<?php get_header() ?>

<!--Main layout-->
<main class="my-5" style="height:100vh">
    <div class="container">
        <!--Section: Content-->
        <section>
            <div class="row">
            <?php
                while(have_posts()) : the_post();
                echo the_content();
                endwhile;
            ?>
            </div>
        </section>
        <!--Section: Content-->
    </div>
</main>

<?php get_footer() ?>