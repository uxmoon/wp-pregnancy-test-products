<?php
/*
Template Name: Front page
*/
get_header(); ?>


    <div class="row">
        <div class="small-12 columns slider-home-container">
            <div class="slider-home">
                <?php
                    $temp     = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query('showposts=-1&post_type=evatest_slider');
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                ?>

                <div class="slider-home__item">
                    <a href="<?php echo rwmb_meta( 'elea_url' ); ?>" title="<?php the_title(); ?>">
                        <?php
                            $images        = rwmb_meta( 'elea_img_slide', 'type=image' );
                            $images_mobile = rwmb_meta( 'elea_img_slide_mobile', 'type=image' );

                            echo "<img data-interchange=\"[";
                            foreach ( $images_mobile as $image_mobile ) {
                                echo "{$image_mobile['full_url']}";
                            }
                            echo ", (default)], [";
                            foreach ( $images as $image ) {
                                echo "{$image['full_url']}";
                            }
                            echo ", (large)]\">";
                        ?>
                    </a>
                </div>

                <?php
                    endwhile;
                    $wp_query = null;
                    $wp_query = $temp;  // Reset
                ?>
            </div>
        </div>
    </div>

    <h2 class="title--home-services">Conocé todo lo que evatest tiene para ofrecerte</h2>
    <div class="row">
        <div class="small-12 columns">
            <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                <li>
                    <div class="service">
                        <a href="<?php echo ot_get_option('destacado_1_vinculo'); ?>">
                            <figure class="service__thumbnail">
                                <img src="<?php echo ot_get_option('destacado_1_imagen'); ?>" alt="<?php echo ot_get_option('destacado_1'); ?>">
                                <figcaption>
                                    <span title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></span>
                                </figcaption>
                            </figure>
                            <h2 class="service__title"><?php echo ot_get_option('destacado_1'); ?></h2>
                        </a>
                    </div>
                </li>
                <li>
                    <!-- component: calculator -->
                    <div class="calculator">
                        <div class="calculator__content">

                            <!-- calculator results -->
                            <div id="js-calculator-content" style="display:none;" class="calculator__results">
                                <a href="javascript: return false;" onclick="mensajeHide();">
                                    <div class="content">
                                        <i class="fa fa-close"></i>
                                        <div id="js-calculator-text" class="calculator__message"></div>
                                    </div>
                                </a>
                            </div>
                            <!-- / calculator results -->

                            <h3 class="calculator__subtitle"><span>Calculadora</span> de Ovulación</h3>
                            <div class="calculator__fields">
                                <input type="text" name="txt_1" class="field" id="txt_1" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2">
                                <input type="text" name="txt_2" class="field" id="txt_2" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2">
                                <input type="text" name="txt_3" class="field" id="txt_3" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2">
                            </div>
                            <p class="calculator__instructions"><span>&lt;&lt;&lt;</span> Ingresá la cantidad de días de duración de tus últimos 3 ciclos.</p>
                            <p class="calculator__notes">Períodos mayores a 20 días y menores a 45</p>
                            <a href="javascript: var a = ovulacion ();" class="calculator__button button" title="Calcular">Calcular <i class="fa fa-angle-right"></i></a>
                        </div>
                        <h2 class="calculator__title">Probá la calculadora</h2>
                    </div>
                </li>
                <li>
                    <div class="service">
                        <a href="<?php echo ot_get_option('destacado_2_vinculo'); ?>">
                            <figure class="service__thumbnail">
                                <img src="<?php echo ot_get_option('destacado_2_imagen'); ?>" alt="<?php echo ot_get_option('destacado_2'); ?>">
                                <figcaption>
                                    <span title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></span>
                                </figcaption>
                            </figure>
                            <h2 class="service__title"><?php echo ot_get_option('destacado_2'); ?></h2>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="service">
                        <a href="<?php echo ot_get_option('destacado_3_vinculo'); ?>">
                            <figure class="service__thumbnail">
                                <img src="<?php echo ot_get_option('destacado_3_imagen'); ?>" alt="<?php echo ot_get_option('destacado_3'); ?>">
                                <figcaption>
                                    <span title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></span>
                                </figcaption>
                            </figure>
                            <h2 class="service__title"><?php echo ot_get_option('destacado_3'); ?></h2>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="service">
                        <a href="<?php echo ot_get_option('destacado_4_vinculo'); ?>" target="_blank">
                            <figure class="service__thumbnail">
                                <img src="<?php echo ot_get_option('destacado_4_imagen'); ?>" alt="<?php echo ot_get_option('destacado_4'); ?>">
                                <figcaption>
                                    <span title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></span>
                                </figcaption>
                            </figure>
                            <h2 class="service__title"><?php echo ot_get_option('destacado_4'); ?></h2>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="service">
                        <a href="<?php echo ot_get_option('destacado_5_vinculo'); ?>">
                            <figure class="service__thumbnail">
                                <img src="<?php echo ot_get_option('destacado_5_imagen'); ?>" alt="<?php echo ot_get_option('destacado_5'); ?>">
                                <figcaption>
                                    <span title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></span>
                                </figcaption>
                            </figure>
                            <h2 class="service__title"><?php echo ot_get_option('destacado_5'); ?></h2>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <h3 class="title--home-products">Y vos ¿Cuál elegís?</h3>

    <div class="row home-products">

        <?php
            $temp     = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('showposts=-1&post_type=product');
            while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>

            <div class="small-12 medium-4 columns">
                <div class="product">
                    <a href="<?php echo rwmb_meta( 'elea_url' ); ?>" title="<?php the_title(); ?>">
                        <figure class="media">
                        <?php
                            $images        = rwmb_meta( 'elea_img_slide', 'type=image' );
                            $images_mobile = rwmb_meta( 'elea_img_slide_mobile', 'type=image' );

                            echo "<img data-interchange=\"[";
                            foreach ( $images_mobile as $image_mobile ) {
                                echo "{$image_mobile['full_url']}";
                            }
                            echo ", (default)], [";
                            foreach ( $images as $image ) {
                                echo "{$image['full_url']}";
                            }
                            echo ", (large)]\">";
                        ?>
                        </figure>
                        <h4 class="product__title"><?php the_title(); ?></h4>
                        <p class="product__description"><?php echo rwmb_meta('elea_product_description'); ?></p>
                    </a>
                    <a href="#" title="Ver Demo" class="button button--demo" data-reveal-id="videoModal-<?php echo $post->ID ?>"><i class="fa fa-video-camera"></i> <br> Demo </a>
                    <a href="<?php echo rwmb_meta( 'elea_url' ); ?>" title="Ver Más" class="button button--more">Ver más <i class="fa fa-angle-right"></i></a>
                </div>

                <div id="videoModal-<?php echo $post->ID ?>" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
                    <h2 id="videoModalTitle" class="reveal-modal__title"><?php the_title(); ?></h2>
                    <div class="video-container">
                        <iframe width="560" height="315" src="<?php echo rwmb_meta( 'elea_url_youtube' ) ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>

            </div>
        <?php
            endwhile;
            $wp_query = null;
            $wp_query = $temp;  // Reset
        ?>
    </div>


<?php get_footer(); ?>
