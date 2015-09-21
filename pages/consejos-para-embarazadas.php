<?php
/*
Template Name: Consejos para embarazadas
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post" id="post-<?php the_ID(); ?>">
            <header class="article__header row">
                <div class="small-12 medium-9 small-centered columns">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/consejos-para-embarazadas.jpg" alt="Consejos para Embarazadas" />
                    <h1>Consejos para embarazadas</h1>
                </div>
            </header>

            <div class="article__content">
                <div class="row">
                    <div class="small-12 medium-9 small-centered columns">

                        <?php if ( is_page(22) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <?php } elseif ( is_page(24) ) { ?>
                        <h2 class="ev-accordion-title first"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <?php } elseif ( is_page(25) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <?php } elseif ( is_page(27) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <?php } elseif ( is_page(29) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <?php } elseif ( is_page(30) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
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
                            <?php if ( is_page(22) ) { ?>
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            <?php } elseif ( is_page(24) ) { ?>
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            <?php } elseif ( is_page(25) ) { ?>
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            <?php } elseif ( is_page(27) ) { ?>
                                <?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?>
                            <?php } elseif ( is_page(29) ) { ?>
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            <?php } elseif ( is_page(30) ) { ?>
                                <?php get_template_part( 'modules/content', 'etapas-del-embarazo' ); ?>
                            <?php } ?>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <?php if ( is_page(22) ) { ?>
                                    <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                                <?php } elseif ( is_page(24) ) { ?>
                                    <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                                <?php } elseif ( is_page(25) ) { ?>
                                    <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                                <?php } elseif ( is_page(27) ) { ?>
                                    <?php get_template_part( 'modules/content', 'evaplan-easy' ); ?>
                                <?php } elseif ( is_page(29) ) { ?>
                                    <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                                <?php } elseif ( is_page(30) ) { ?>
                                    <?php get_template_part( 'modules/content', 'controles-medicos' ); ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
