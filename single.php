<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php //include (TEMPLATEPATH . '/inc/meta.php' ); ?>
			<?php get_template_part('inc', 'meta') ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php the_excerpt(); ?>

				<?php comments_template(); ?>

			</div>

		</div>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>