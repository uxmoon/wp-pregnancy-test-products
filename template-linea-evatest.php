<?php
/*
Template Name: Linea Evatest
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="post" id="post-<?php the_ID(); ?>">

        <!-- <div class="header-photo linea-evatest hide">
            <h1><?php the_title(); ?></h1>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/linea-evatest.jpg" alt="Línea Evatest" />
        </div> -->

        <div class="row">
            <div class="small-12 medium-8 large-8 medium-centered large-centered columns">

                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/linea-evatest.jpg" alt="Línea Evatest" />

                <div class="row">
                    <div class="large-8 large-push-4 columns">
                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/signos_plus.jpg" alt="Evatest Signos Plus" />
                        </a>
                    </div>
                    <div class="large-4 large-pull-8 columns">
                        <p class="info">Fácil de hacer y fácil de leer, resultado cuatro días antes, y con un 99% de exactitud.</p>

                        <p class="demo">
                            <a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos Plus - Demo">Demo</a>
                            <a href="/Evatest_Signos_Plus/" title="Evatest Signos Plus - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="large-8 large-push-4 columns">
                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/tradicional.jpg" alt="Evatest Classic" /></a>
                    </div>
                    <div class="large-4 large-pull-8 columns">
                        <p class="info">Fácil de hacer y fácil de leer, resultado cuatro días antes, y con un 99% de exactitud.</p>

                        <p class="demo">
                            <a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos Plus - Demo">Demo</a>
                            <a href="/Evatest_Signos_Plus/" title="Evatest Signos Plus - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="large-8 large-push-4 columns">
                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/easy.jpg" alt="Evatest Easy" /></a>
                    </div>
                    <div class="large-4 large-pull-8 columns">
                        <p class="info">Test rápido de embarazo, sin recipientes y con un 99% de exactitud.</p>
                        <p class="demo">
                            <a href="/Evatest_Easy/" class="fancybox fancybox.iframe view-demo" title="Evatest Easy - Demo">Demo</a>
                            <a href="/Evatest_Easy/" title="Evatest Easy - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="large-8 large-push-4 columns">
                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/signos.jpg" alt="Evatest Signos" /></a>
                    </div>
                    <div class="large-4 large-pull-8 columns">
                        <p class="info">De fácil lectura, resultado cuatro días antes, y con un 99% de exactitud.</p>
                        <p class="demo">
                            <a href="/Evatest_Signos/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos - Demo">Demo</a>
                            <a href="/Evatest_Signos/" title="Evatest Signos - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="large-8 large-push-4 columns">
                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/evaplan_easy.jpg" alt="Evatest Evaplan Easy" /></a>
                    </div>
                    <div class="large-4 large-pull-8 columns">
                        <p class="info">1er y único Test de Ovulación en formato stick, predice tu momento fértil del mes con una exactitud superior al 99%.</p>
                        <p class="demo">
                            <a href="/Evatest_Evaplan/" class="fancybox fancybox.iframe view-demo" title="Evaplan - Demo">Demo</a>
                            <a href="/ Evatest_Evaplan /" title="Evaplan - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
