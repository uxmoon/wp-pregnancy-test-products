			<div class="header-photo linea-evatest">
				<h1><?php the_title(); ?></h1>
			</div>

			<?php //wp_nav_menu( array('menu' => 'linea-evatest-evaplan-easy', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>
			<?php wp_nav_menu( array('menu' => 'productos', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>

			<div class="item-single clearfix">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/evaplan_easy.jpg" alt="Evaplan Easy" />
				<p class="info">1er y único Test de Ovulación en formato stick, predice tu momento fértil del mes con una exactitud superior al 99%.</p>
				<p class="demo"><?php $upload_dir = wp_upload_dir(); ?><a href="#" class="eModal eModal-1 view-demo">Demo</a> <a href="<?php echo $upload_dir['baseurl']; ?>/manual/manual-evaplan-easy.pdf" class="download" target="_blank">Descarga el manual</a></p>
			</div>
