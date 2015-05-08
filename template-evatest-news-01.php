<?php
/*
Template Name: Evatest News - 1 de 2
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="header-photo evatest-news">
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="entry">
	<div class="intro">

					<p>En esta sección podrás leer todo lo relacionado con la salud de la mujer, enterarte de los avances de la ciencia y lo último en tecnología.</p>


				</div>

				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/evatest-news/avance-genetica/#item-01">EL AVANCE DE LA CIENCIA Y LA GENETICA</a></li>

				</ul>


			</div>

		</div>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>