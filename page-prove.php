<?php get_header() ?>
<!-- PAGE HEADER -->

<h1 class="bg-amber-700">ciao mondo</h1>


<?php if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>


        <!-- PAGE CONTENT -->

        <section class="mt-0">

            <?php the_content() ?>


        </section>

<?php
    }
}
wp_reset_postdata() ?>

<?php get_template_part('template-parts/card-room') ?>

<?php get_footer() ?>

