			<div class="header-photo linea-evatest">
				<h1><?php the_title(); ?></h1>
			</div>

			<?php //wp_nav_menu( array('menu' => 'linea-evatest-tradicional', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>
			<?php wp_nav_menu( array('menu' => 'productos', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>

			<div class="item-single clearfix">
				<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/tradicional.jpg" alt="Evatest Tradicional" /></a>
				<p class="info">Clásico test de embarazo con un 99% de exactitud.</p>
				<p class="demo">
					<?php $upload_dir = wp_upload_dir(); ?>
					<a href="/Evatest_Classic/" class="fancybox fancybox.iframe view-demo" title="Evatest Tradicional - Demo">Demo</a>
					<a href="<?php echo $upload_dir['baseurl']; ?>/manual/Evatest-Classic.pdf" class="download" target="_blank">Descarga el manual</a></p>
			</div>
