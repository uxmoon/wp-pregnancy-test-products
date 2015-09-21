<?php
/*
Template Name: Padres
*/
?>
<?php get_header(); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <header class="article__header row">
                <div class="small-12 medium-9 small-centered columns">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/decidir-ser-padres.jpg" alt="Decidir ser padres" />
                    <h1>Decidir ser Padres</h1>
                    <p>Cuando estés intentando quedar embarazada, vas a querer que esto suceda cuanto antes. Aunque no ocurra tan pronto como te gustaría, no tenés que preocuparte. De hecho, la mayoría de las parejas sanas concebirán dentro del primer año después de comenzar a intentarlo.</p>
                    <p>Existen unos pocos días en el mes en los que es posible concebir, por lo tanto quedar embarazada puede depender tan solo del momento oportuno. Evaplan puede ayudarte a identificar los días más fértiles de tu ciclo, esos días donde mantener relaciones sexuales puede dar como resultado un embarazo.</p>
                    <p>Para mayor información ingresa en el siguiente enlace: <br />
                    <a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan/" title="Evatest">Evaplan: test de ovulación para conocer tu período de mayor fertilidad.</a></p>
                </div>
            </header>

            <div class="article__content">
                <div class="row">
                    <div class="small-12 medium-9 small-centered columns">
                    <?php if ( is_page(32) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/fertilidad/#item-01">Fertilidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/preparar-el-cuerpo/#item-02">Preparar el cuerpo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/maximizar-las-posibilidades/#item-03">Maximizar las posibilidades</a></li>
                        </ul>
                    <?php } elseif ( is_page(34) ) { ?>
                        <h2 class="ev-accordion-title first"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        </li>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/preparar-el-cuerpo/#item-02">Preparar el cuerpo</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/maximizar-las-posibilidades/#item-03">Maximizar las posibilidades</a></li>
                        </ul>
                    <?php } elseif ( is_page(36) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/fertilidad/#item-01">Fertilidad</a></li>
                        </ul>

                        <h2 class="ev-accordion-title"><?php the_title(); ?></h2>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>

                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/maximizar-las-posibilidades/#item-03">Maximizar las posibilidades</a></li>
                        </ul>
                    <?php } elseif ( is_page(38) ) { ?>
                        <ul class="ev-accordion">
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/fertilidad/#item-01">Fertilidad</a></li>
                            <li><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/preparar-el-cuerpo/#item-02">Preparar el cuerpo</a></li>
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
                                <?php get_template_part( 'modules/content', 'evaplan-easy' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </article>
    <?php endwhile; endif; ?>
<?php get_footer(); ?>
