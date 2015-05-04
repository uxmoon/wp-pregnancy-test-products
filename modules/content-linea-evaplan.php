			<div class="header-photo linea-evatest">
				<h1><?php the_title(); ?></h1>
			</div>

			<?php //wp_nav_menu( array('menu' => 'linea-evatest-evaplan', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>
			<?php wp_nav_menu( array('menu' => 'productos', 'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>' )); ?>

			<div class="item-single clearfix">
				<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan/"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/evaplan.jpg" alt="Evaplan" /></a>
				<p class="info">Test de ovulación en un paso, para conocer tu período de fertilidad, con una exactitud superior al 99%.</p>
				<p class="demo"><?php $upload_dir = wp_upload_dir(); ?><a href="#" class="eModal eModal-1 view-demo">Demo</a> <a href="<?php echo $upload_dir['baseurl']; ?>/manual/manual-evaplan.pdf" class="download" target="_blank">Descarga el manual</a></p>
			</div>
