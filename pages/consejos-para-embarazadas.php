<?php
/*
Template Name: Consejos para embarazadas
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">

            <div class="row">

                <div class="small-12 medium-8 large-8 medium-centered large-centered columns">

                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/consejos-para-embarazadas.jpg" alt="Consejos para Embarazadas" />

                    <div class="entry">

                        <?php if ( is_page(22) ) { ?>

                        <ul class="l-stacked accordion top">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                            </div>
                        </div>

                        <?php } elseif ( is_page(24) ) { ?>

                        <ul class="l-stacked accordion top">
                            <li class="item is-active" id="item-01"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                            </div>
                        </div>

                        <?php } elseif ( is_page(25) ) { ?>
                        <ul class="l-stacked accordion top">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li class="item is-active" id="item-02"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                            </div>
                        </div>

                        <?php } elseif ( is_page(27) ) { ?>
                        <ul class="l-stacked accordion top">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li class="item is-active" id="item-03"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'evaplan-easy' ); ?>
                            </div>
                        </div>

                        <?php } elseif ( is_page(29) ) { ?>
                        <ul class="l-stacked accordion top">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li class="item is-active" id="item-04"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
                        </ul>

                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                            </div>
                        </div>

                        <?php } elseif ( is_page(30) ) { ?>
                        <ul class="l-stacked accordion top">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
                            <li class="item is-active" id="item-05"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                        </ul>

                        <div class="row">
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'etapas-del-embarazo' ); ?>
                            </div>
                            <div class="small-12 medium-6 large-6 columns">
                                <?php get_template_part( 'modules/content', 'controles-medicos' ); ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
