<?php
/*
Template Name: Test de Embarazo
*/
?>
<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="post" id="post-<?php the_ID(); ?>">
            <header class="article__header row">
                <div class="small-12 medium-9 small-centered columns">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/test-de-embarazo.jpg" alt="Test de Embarazo" />
                    <h1>¿Estás embarazada?</h1>

                    <h2>Tu cuerpo da señales</h2>

                    <p>Si la menstruación no llega en el período que lo hace habitualmente, si tus mamas están hinchadas y/o doloridas, si tenés que ir con mucha frecuencia al baño, si notás cambios en tu humor y en tu apetito, si al levantarte por la mañana tenés nauseas, vómitos o un malestar sin razón, puede ser que tu cuerpo te esté avisando de un posible embarazo.</p>

                    <p>Ante cualquier duda consultá a tu médico.</p>
                </div>
            </header>
            <div class="article__content">
                <div class="row">
                    <div class="small-12 medium-9 small-centered columns">
                        <?php if ( is_page(8) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/pienso-hacerme-un-test/#item-01">Pienso hacerme un test</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-positivo/#item-02">El test me dio positivo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-negativo/#item-03">El test me dio negativo</a></li>
                        </ul>

                        <?php } elseif ( is_page(10) ) { ?>
                        <h2 class="ev-accordion-title first"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-positivo/#item-02">El test me dio positivo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-negativo/#item-03">El test me dio negativo</a></li>
                        </ul>

                        <?php } elseif ( is_page(12) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/pienso-hacerme-un-test/#item-01">Pienso hacerme un test</a></li>
                        </ul>
                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-negativo/#item-03">El test me dio negativo</a></li>
                        </ul>

                        <?php } elseif ( is_page(14) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/pienso-hacerme-un-test/#item-01">Pienso hacerme un test</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/el-test-me-dio-positivo/#item-02">El test me dio positivo</a></li>
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
                                <?php if ( is_page(14) ) { ?>
                                    <?php get_template_part( 'modules/content', 'evaplan-easy' ); ?>
                                <?php } else { ?>
                                    <?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?>
                                <?php } ?>
                            </div>
                            <div class="small-12 medium-6 columns">
                                <?php get_template_part( 'modules/content', 'salud-femenina' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
