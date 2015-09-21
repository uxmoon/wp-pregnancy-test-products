<?php
/*
Template Name: Producto - Classic
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <header class="article__header row">
                <div class="small-12 medium-9 small-centered columns">

                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/linea-evatest.jpg" alt="Línea Evatest" />
                </div>
            </header>

            <div class="article__content">
                <div class="row">
                    <div class="small-12 medium-9 small-centered columns">

                    <?php // como actua
                    if ( is_page(216) ) { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>
                        <h2 class="ev-accordion-title first" id="item-01"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
                        </ul>

                    <?php //¿Cómo y cuando debo usarlo?
                    } elseif ( is_page(196) ) { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
                        </ul>
                        <h2 class="ev-accordion-title" id="item-02"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
                        </ul>

                    <?php //Recomendaciones
                    } elseif ( is_page(212) ) { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
                        </ul>
                        <h2 class="ev-accordion-title" id="item-03"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
                        </ul>

                    <?php // Garantía de calidad
                    } elseif ( is_page(213) ) { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
                        </ul>
                        <h2 class="ev-accordion-title" id="item-04"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
                        </ul>

                    <?php // Preguntas frecuentes
                    } elseif ( is_page(215) ) { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
                        </ul>
                        <h2 class="ev-accordion-title" id="item-05"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
                        </ul>

                    <?php // Instrucciones de uso
                    } elseif ( is_page(214) ) { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
                        </ul>
                        <h2 class="ev-accordion-title" id="item-06"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>

                    <?php } else { ?>
                    <?php get_template_part( 'modules/content', 'linea-evatest-classic' ); ?>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-actua/#item-01">¿Cómo act&uacute;a?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/como-y-cuando-debo-usarlo/#item-02">¿C&oacute;mo y cu&aacute;ndo debo usarlo?</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/recomendaciones/#item-03">Recomendaciones</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/garantia-de-calidad/#item-04">Garant&iacute;a de calidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/preguntas-frecuentes/#item-05">Preguntas frecuentes</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/instrucciones-de-uso/#item-06">Instrucciones de uso</a></li>
                        </ul>
                    <?php } ?>
                    </div>
                </div>
            </div>

            <footer class="article__footer">
                <div class="row">
                    <div class="small-12 medium-8 medium-centered columns">
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <?php get_template_part( 'modules/content', 'consultorio-online' ); ?>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <?php get_template_part( 'modules/content', 'evatest-signos-plus' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
