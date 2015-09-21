<?php
/*
Template Name: Evatest News
*/
?>
<?php get_header(); ?>


<section class="article__header row">
    <div class="small-12 medium-9 small-centered columns">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/evatest-news.jpg" alt="Evatest News" />
        <h1>Evatest News</h1>
        <p class="text-center">En esta sección podrás leer todo lo relacionado con la salud de la mujer, enterarte de los avances de la ciencia y lo último en tecnología.</p>
        <hr>
    </div>
</section>

<section>
    <div class="row">
        <div class="small-12 medium-9 small-centered columns">
            <?php
              $temp     = $wp_query;
              $wp_query = null;
              $wp_query = new WP_Query();
              $wp_query->query('showposts=6&post_type=post'.'&paged='.$paged);

              while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>

            <article>
                <header class="post__header">
                    <?php the_title('<h1>', '</h1>'); ?>
                </header>
                <?php the_content(); ?>
            </article>

            <?php endwhile; ?>

            <nav>
                <?php previous_posts_link('&laquo; Nuevos') ?>
                <?php next_posts_link('Anteriores &raquo;') ?>
            </nav>

            <?php
              $wp_query = null;
              $wp_query = $temp;  // Reset
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
