<?php
/*
Template Name: Salud Femenina
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post" id="post-<?php the_ID(); ?>">
                <header class="article__header row">
                    <div class="small-12 medium-9 small-centered columns">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/salud-femenina.jpg" alt="Salud Femenina" />
                        <h1>Salud Femenina</h1>
                        <p>Tu cuerpo es el vehículo que te acompañará a través de los años, de las vivencias, de las emociones... cuidarlo es tu responsabilidad y mejorará tu calidad de vida.</p>
                        <p>En esta sección te invitamos a conocer cómo es su fisiología, cómo funciona, cuándo visitar por primera vez al ginecólogo, qué se entiende por menstruación y por síndrome pre menstrual, cuáles son los exámenes de rutina que toda mujer debe hacerse en el transcurso de su vida y qué métodos anticonceptivos existen para qué vos y tu pareja elijan el que crean más conveniente.</p>
                    </div>
                </header>

                <div class="article__content">
                    <div class="row">
                        <div class="small-12 medium-9 small-centered columns">

                        <?php if ( is_page(50) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(82) ) { ?>
                        <h2 class="ev-accordion-title first"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(84) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(86) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(88) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <footer class="article__footer">
                <div class="row">
                    <div class="small-12 medium-8 medium-centered columns">
                        <div class="row">
                            <div class="small-12 medium-6 columns">
                                <?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <?php get_template_part( 'modules/content', 'consultorio-online' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
