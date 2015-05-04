			<div class="header-photo linea-evatest">
				<h1><?php the_title(); ?></h1>
			</div>

			<?php wp_nav_menu( array('menu' => 'productos', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>

			<div class="item-single clearfix">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/signos_plus.jpg" alt="Evatest Signos" />
				<p class="info">El test de embarazo más completo: resultado en signos, hasta 4 días antes y con un 99% de exactitud.</p>
				<p class="demo">
					<?php $upload_dir = wp_upload_dir(); ?>
					<a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos Plus - Demo">Demo</a>
					<a href="<?php echo $upload_dir['baseurl']; ?>/manual/manual-evatest-signos-plus.pdf" class="download" target="_blank">Descarga el manual</a>
				</p>
			</div>
