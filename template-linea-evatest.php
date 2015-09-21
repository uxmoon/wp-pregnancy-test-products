<?php
/*
Template Name: Linea Evatest
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="post" id="post-<?php the_ID(); ?>">
                <header class="article__header row">
                    <div class="small-12 medium-9 small-centered columns">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/linea-evatest.jpg" alt="Línea Evatest" />
                        <h1>Productos Evatest</h1>
                    </div>
                </header>

                <div class="article__content ev-products">
                    <div class="row">
                        <div class="small-12 medium-9 medium-centered columns">

                            <div class="product">
                                <div class="row">
                                    <div class="small-12 medium-7 medium-push-5 columns">
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-signos-plus.jpg" alt="Evatest Signos Plus" />
                                        </a>
                                    </div>
                                    <div class="small-12 medium-5 medium-pull-7 columns">
                                        <h4 class="product__title">Evatest Signos Plus</h4>
                                        <p class="product__description">Fácil de hacer y fácil de leer, resultado cuatro días antes, y con un 99% de exactitud.</p>
                                        <a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo button button--demo" title="Ver Demo"><i class="fa fa-video-camera"></i> <br> Demo</a>
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/"  class="button button--more" title="Ver Más">Ver más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="product">
                                <div class="row">
                                    <div class="small-12 medium-7 medium-push-5 columns">
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-tradicional.jpg" alt="Evatest Classic" />
                                        </a>
                                    </div>
                                    <div class="small-12 medium-5 medium-pull-7 columns">
                                        <h4 class="product__title">Evatest Classic</h4>
                                        <p class="product__description">Fácil de hacer y fácil de leer, resultado cuatro días antes, y con un 99% de exactitud.</p>
                                        <a href="/evatest-classic/" class="fancybox fancybox.iframe view-demo button button--demo" title="Ver Demo"><i class="fa fa-video-camera"></i> <br> Demo</a>
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/" title="Evatest Signos Plus - Demo" class="button button--more">Ver más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="product">
                                <div class="row">
                                    <div class="small-12 medium-7 medium-push-5 columns">
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-easy.jpg" alt="Evatest Easy" />
                                        </a>
                                    </div>
                                    <div class="small-12 medium-5 medium-pull-7 columns">
                                        <h4 class="product__title">Evatest Easy</h4>
                                        <p class="product__description">Test rápido de embarazo, sin recipientes y con un 99% de exactitud.</p>
                                        <a href="/evatest_easy/" title="Ver Demo" class="fancybox fancybox.iframe view-demo button button--demo"><i class="fa fa-video-camera"></i> <br> Demo</a>
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/" title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="product">
                                <div class="row">
                                    <div class="small-12 medium-7 medium-push-5 columns">
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos/">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-signos.jpg" alt="Evatest Signos" />
                                        </a>
                                    </div>
                                    <div class="small-12 medium-5 medium-pull-7 columns">
                                        <h4 class="product__title">Evatest Signos</h4>
                                        <p class="product__description">El test de embarazo más completo: resultado en signos, hasta 4 días antes y con un 99% de exactitud.</p>
                                        <a href="/evatest_signos/" title="Ver Demo" class="fancybox fancybox.iframe view-demo button button--demo"><i class="fa fa-video-camera"></i> <br> Demo</a>
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos/" title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="product">
                                <div class="row">
                                    <div class="small-12 medium-7 medium-push-5 columns">
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/">
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-evaplan.jpg" alt="Evatest Evaplan Easy" />
                                        </a>
                                    </div>
                                    <div class="small-12 medium-5 medium-pull-7 columns">
                                        <h4 class="product__title">Evaplan Easy</h4>
                                        <p class="product__description">1er y único Test de Ovulación en formato stick, predice tu momento fértil del mes con una exactitud superior al 99%.</p>
                                        <a href="/Evatest_Evaplan/" title="Ver Demo" class="fancybox fancybox.iframe view-demo button button--demo"><i class="fa fa-video-camera"></i> <br> Demo</a>
                                        <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/" title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </article>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
