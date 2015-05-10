<?php
/*
Template Name: Producto - Evaplan Easy
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

            <div class="row">

                <div class="small-12 medium-8 large-8 medium-centered large-centered columns">

                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/linea-evatest.jpg" alt="Línea Evatest" />

        			<?php // como actua
        			if ( is_page(864) ) { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item is-active" id="item-01"><span class="title"><?php the_title(); ?></span>
        						<div class="content">
        							<?php the_content(); ?>
        						</div>
        					</li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/recomendaciones/#item-03">Recomendaciones</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
        				</ul>

        			<?php //¿Cómo y cuando debo usarlo?
        			} elseif ( is_page(866) ) { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
        					<li class="item is-active" id="item-02"><span class="title"><?php the_title(); ?></span>
        						<div class="content">
        							<?php the_content(); ?>
        						</div>
        					</li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/recomendaciones/#item-03">Recomendaciones</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
        				</ul>

        			<?php //Recomendaciones
        			} elseif ( is_page(872) ) { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
        					<li class="item is-active" id="item-03"><span class="title"><?php the_title(); ?></span>
        						<div class="content">
        							<?php the_content(); ?>
        						</div>
        					</li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
        				</ul>

        			<?php // Garantía de calidad
        			} elseif ( is_page(874) ) { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/recomendaciones/#item-03">Recomendaciones</a></li>
        					<li class="item is-active" id="item-04"><span class="title"><?php the_title(); ?></span>
        						<div class="content">
        							<?php the_content(); ?>
        						</div>
        					</li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
        				</ul>

        			<?php // Preguntas frecuentes
        			} elseif ( is_page(868) ) { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/recomendaciones/#item-03">Recomendaciones</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
        					<li class="item is-active" id="item-05"><span class="title"><?php the_title(); ?></span>
        						<div class="content">
        							<?php the_content(); ?>
        						</div>
        					</li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
        				</ul>

        			<?php // Instrucciones de uso
        			} elseif ( is_page(870) ) { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/recomendaciones/#item-03">Recomendaciones</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
        					<li class="item is-active" id="item-06"><span class="title"><?php the_title(); ?></span>
        						<div class="content">
        							<?php the_content(); ?>
        						</div>
        					</li>
        				</ul>
        			<?php } else { ?>
        			<?php get_template_part( 'modules/content', 'linea-evaplan-easy' ); ?>
        			<div class="entry">
        				<ul class="l-stacked accordion">
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/recomendaciones/#item-03">Recomendaciones</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
        					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
        				</ul>
        			<?php } ?>
                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                            </div>
                        </div>
        			</div>
                </div>
            </div>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>
