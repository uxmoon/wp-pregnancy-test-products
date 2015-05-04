<?php
/*
Template Name: Linea Evatest
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
		<div class="header-photo linea-evatest">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="entry wide">
			<ul class="l-stacked products">
				<li class="item clearfix signos">
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/signos_plus.jpg" alt="Evatest Signos Plus" /></a>
					<p class="info">Fácil de hacer y fácil de leer, resultado cuatro días antes, y con un 99% de exactitud.</p>
					<p class="demo"><a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos Plus - Demo">Demo</a><a href="/Evatest_Signos_Plus/" title="Evatest Signos Plus - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a></p>
                    
				</li>
				<li class="item clearfix tradicional">
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/tradicional.jpg" alt="Evatest Classic" /></a>
					<p class="info">Clásico test de embarazo con un 99% de exactitud.</p>
					<p class="demo"><a href="/Evatest_Classic/" class="fancybox fancybox.iframe view-demo" title="Evatest Classic - Demo">Demo</a><a href="/Evatest_Classic/" title="Evatest Classic - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a></p>
				</li>
				<li class="item clearfix easy">
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/easy.jpg" alt="Evatest Easy" /></a>
					<p class="info">Test rápido de embarazo, sin recipientes y con un 99% de exactitud.</p>
					<p class="demo"><a href="/Evatest_Easy/" class="fancybox fancybox.iframe view-demo" title="Evatest Easy - Demo">Demo</a><a href="/Evatest_Easy/" title="Evatest Easy - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a></p>
				</li>
				<li class="item clearfix signos">
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/signos.jpg" alt="Evatest Signos" /></a>
					<p class="info">De fácil lectura, resultado cuatro días antes, y con un 99% de exactitud.</p>
					<p class="demo"><a href="/Evatest_Signos/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos - Demo">Demo</a><a href="/Evatest_Signos/" title="Evatest Signos - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a></p>
				</li>
				<li class="item clearfix evaplan">
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan-easy/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/evaplan_easy.jpg" alt="Evatest Evaplan Easy" /></a>
					<p class="info">1er y único Test de Ovulación en formato stick, predice tu momento fértil del mes con una exactitud superior al 99%.</p>
					<p class="demo"><a href="/Evatest_Evaplan/" class="fancybox fancybox.iframe view-demo" title="Evaplan - Demo">Demo</a><a href="/ Evatest_Evaplan /" title="Evaplan - Demo" class="fancybox fancybox.iframe view-link">Mirá la demo</a></p>
				</li>
			</ul>
		</div>
	</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
