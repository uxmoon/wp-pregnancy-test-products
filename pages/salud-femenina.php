<?php
/*
Template Name: Salud Femenina
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">

            <div class="row">

                <div class="small-12 medium-8 large-8 medium-centered large-centered columns">

                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/salud-femenina.jpg" alt="Salud Femenina" />

                    <div class="entry">

                        <div class="intro">
                            <p>Tu cuerpo es el vehículo que te acompañará a través de los años, de las vivencias, de las emociones... cuidarlo es tu responsabilidad y mejorará tu calidad de vida.</p>

                            <p>En esta sección te invitamos a conocer cómo es su fisiología, cómo funciona, cuándo visitar
                            por primera vez al ginecólogo, qué se entiende por menstruación y por síndrome pre menstrual, cuáles son los exámenes de rutina que toda mujer debe hacerse en el transcurso de su vida
                            y qué métodos anticonceptivos existen para qué vos y tu pareja elijan el que crean más conveniente.</p>

                        </div>

                        <?php if ( is_page(50) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(82) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item" id="item-01"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(84) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li class="item" id="item-02"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(86) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li class="item" id="item-03"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/examenes-de-rutina/#item-04">Exámenes de rutina</a></li>
                        </ul>

                        <?php } elseif ( is_page(88) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/aparato-reproductor-femenino/#item-01">Aparato reproductor femenino</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/ciclo-femenino/#item-02">Ciclo femenino</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/metodos-anticonceptivos/#item-03">Métodos anticonceptivos</a></li>
                            <li class="item" id="item-04"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                        </ul>
                        <?php } ?>
                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'consultorio-online' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
