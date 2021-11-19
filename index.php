<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post(); ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-10 offset-lg-1">
                        <h1 id="h1"> <?php the_title(); ?> </h1>
                        <?php the_content(); ?>
                <?php $args = array(
                    'post_per_page' => -1,
                    'post_type' => 'post',
                );
            }
        }; ?>
                    </div>
                </div>
        </main>
        <?php get_footer(); ?>