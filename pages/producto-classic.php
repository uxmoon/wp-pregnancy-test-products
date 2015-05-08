<?php
/*
Template Name: Producto - Classic
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<?php // como actua
			if ( is_page(216) ) { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item is-active" id="item-01"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
				</ul>

			<?php //¿Cómo y cuando debo usarlo?
			} elseif ( is_page(196) ) { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
					<li class="item is-active" id="item-02"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
				</ul>

			<?php //Recomendaciones
			} elseif ( is_page(212) ) { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
					<li class="item is-active" id="item-03"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
				</ul>

			<?php // Garantía de calidad
			} elseif ( is_page(213) ) { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
					<li class="item is-active" id="item-04"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
				</ul>

			<?php // Preguntas frecuentes
			} elseif ( is_page(215) ) { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
					<li class="item is-active" id="item-05"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
				</ul>

			<?php // Instrucciones de uso
			} elseif ( is_page(214) ) { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
					<li class="item is-active" id="item-06"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
				</ul>
			<?php } else { ?>
			<?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
			<div class="entry">
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
				</ul>
			<?php } ?>
				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'consultorio-online' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'evatest-signos-plus' ); ?></li>
				</ul>
			</div>
		</div>
		<?php endwhile; endif; ?>
<?php get_footer(); ?>