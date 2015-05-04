			<div class="header-photo linea-evatest">
				<h1><?php the_title(); ?></h1>
			</div>

			<?php //wp_nav_menu( array('menu' => 'linea-evatest-easy', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>
			<?php wp_nav_menu( array('menu' => 'productos', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>

			<div class="item-single clearfix">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/easy.jpg" alt="Evatest Easy" />
				<p class="info">Test rápido de embarazo, Fácil, práctico y sin recipientes. Con un 99% de exactitud.</p>
				<p class="demo">
					<?php $upload_dir = wp_upload_dir(); ?>
					<a href="/Evatest_Easy/" class="fancybox fancybox.iframe view-demo" title="Evatest Easy - Demo">Demo</a>
					<a href="<?php echo $upload_dir['baseurl']; ?>/manual/manual-evatest-easy.pdf" class="download" target="_blank">Descarga el manual</a></p>
				</div>
