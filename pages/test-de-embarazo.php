<?php
/*
Template Name: Test de Embarazo
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post" id="post-<?php the_ID(); ?>">

            <div class="row">

                <div class="small-12 medium-8 large-8 medium-centered large-centered columns">

                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/test-de-embarazo.jpg" alt="Test de Embarazo" />

                    <div class="entry">

                        <div class="intro">
                            <h4>TU CUERPO DA SEÑALES</h4>

                            <p>Si la menstruación no llega en el período que lo hace habitualmente, si tus mamas están hinchadas y/o doloridas, si tenés que ir con mucha frecuencia al baño, si notás cambios en tu humor y en tu apetito, si al levantarte por la mañana tenés nauseas, vómitos o un malestar sin razón, puede ser que tu cuerpo te esté avisando de un posible embarazo.</p>
                            <p>Ante cualquier duda consultá a tu médico.</p>
                        </div>

                        <?php if ( is_page(8) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/pienso-hacerme-un-test/#item-01">Pienso hacerme un test</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-positivo/#item-02">El test me dio positivo</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-negativo/#item-03">El test me dio negativo</a></li>
                        </ul>

                        <?php } elseif ( is_page(10) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item is-active" id="item-01"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-positivo/#item-02">El test me dio positivo</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-negativo/#item-03">El test me dio negativo</a></li>
                        </ul>

                        <?php } elseif ( is_page(12) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/pienso-hacerme-un-test/#item-01">Pienso hacerme un test</a></li>
                            <li class="item is-active" id="item-02"><span class="title"><?php the_title(); ?></span>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                            </li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-negativo/#item-03">El test me dio negativo</a></li>
                        </ul>

                        <?php } elseif ( is_page(14) ) { ?>
                        <ul class="l-stacked accordion">
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/pienso-hacerme-un-test/#item-01">Pienso hacerme un test</a></li>
                            <li class="item"><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-positivo/#item-02">El test me dio positivo</a></li>
                            <li class="item is-active" id="item-03"><span class="title"><?php the_title(); ?></span>
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
                                <?php get_template_part( 'modules/content', 'salud-femenina' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; endif; ?>

<?php get_footer(); ?>
