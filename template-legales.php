<?php
/*
Template Name: Legales
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post legales row" id="post-<?php the_ID(); ?>">
            <div class="small-12 medium-8 medium-centered columns">
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>

<?php get_footer(); ?>
