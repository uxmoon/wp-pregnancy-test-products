<?php
/*
Template Name: Slider
*/
?>
<?php get_header(); ?>

<div class="slider-slick-home">

	<?php
		$temp = $wp_query;
		$wp_query = null;
		$wp_query = new WP_Query();
		$wp_query->query('showposts=-1&post_type=evatest_slider');

		while ($wp_query->have_posts()) : $wp_query->the_post();

	?>
<div>
	<a href="<?php echo rwmb_meta( 'elea_url_slide' ); ?>">
		<?php
			$images = rwmb_meta( 'elea_img_slide', 'type=image' );
			foreach ( $images as $image ) {
			echo "<img src='{$image['full_url']}' alt='";
			echo the_title();
			echo "' title='";
			echo the_title();
			echo "'/>";
		} ?>
	</a>
</div>
	<?php
		endwhile;
		$wp_query = null;
		$wp_query = $temp;  // Reset
	?>

</div>

<div class="featured-sections">

	<div id="msj" style="display:none;">
		<div class="content">
			<div class="arrow"></div>
			<div id="msj_cerrar"><a href="javascript: return false;" onclick="mensajeHide();">cerrar</a></div>
			<div id="msj_txt"></div>
		</div>
	</div>
	<h2 class="heading">Conocé todo lo que evatest tiene para ofrecerte</h2>

	<ul class="l-inline clearfix">
		<li class="item">
			<div class="thumb">
				<a href="<?php echo esc_url( home_url() ); ?>/consultorio-online/">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/stock/stock-02.jpg" alt="Hacé tu consulta. Consultorio online.">
				</a>
			</div>
			<p class="call-to-action"><a href="<?php echo esc_url( home_url() ); ?>/consultorio-online/" title="Hacé tu consulta. Consultorio Online."><strong>Hacé tu consulta</strong> Consultorio Online</a></p>
		</li>
		<li class="item">
			<div class="thumb">
				<a href="<?php echo esc_url( home_url() ); ?>/evatest-news/">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/stock/stock-03.jpg" alt="Todo sobre la salud de la mujer">
				</a>
			</div>
			<p class="call-to-action"><a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/" title="Todo sobre la salud de la mujer"><strong>Evatest </strong>News</a></p>
		</li>
		<li class="item last">
			<div class="calculator">
				<h3 class="heading"><strong>Calculadora</strong> de ovulación</h3>
				<div class="content">
					<div class="fields">
						<input name="txt_1" class="imput-back" id="txt_1" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>

						<input name="txt_2" class="imput-back" id="txt_2" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>

						<input name="txt_3" class="imput-back" id="txt_3" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>
					</div>
					<p class="instructions">Ingresá la cantidad de días de duración de tus últimos 3 ciclos.</p>
					<p class="note">Períodos mayores a 20 <br/> días y menores a 45</p>
				</div>
				<a href="javascript: var a = ovulacion ();" class="btn btn-calculator" title="Calcular">Calcular</a>
			</div>
			<p class="call-to-action"><strong>Probá la calculadora</strong> de ovulación</p>
		</li>
	</ul>

</div>

<div class="product-showcase clearfix">
	<h3 class="heading">Y vos ¿Cuál elegís?</h3>
	<div class="product signos">
		<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/" title="Evatest Signos"><h2 class="heading"><strong>Evatest</strong> <span>Signos Plus</span></h2></a>
		<!-- <p>Test de fácil lectura porque muestra su resultado en signos, resultados hasta 4 días antes de la menstruación. Con un 99% de exactitud.</p> -->
		<p>El test de embarazo más completo: resultado en signos, hasta 4 días antes y con un 99% de exactitud.</p>
		<div class="callout">
			<ul class="l-inline clearfix">
				<!-- <li class="icon demo"><a href="/Evatest_Signos/" title="Evatest Signos - Demo" class="fancybox fancybox.iframe">Demo</a></li> -->
				<li class="icon more"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos/" title="Ver más">Ver más</a></li>
			</ul>
		</div>
	</div>

	<div class="product tradicional">
		<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/" title="Evatest Tradicional"><h2 class="heading"><strong>Evatest</strong> <span>Classic</span></h2></a>
		<p>Clásico test de embarazo,  con un 99% de exactitud.</p>
		<div class="callout">
			<ul class="l-inline clearfix">
				<li class="icon demo"><a href="/Evatest_Classic/" title="Evatest Tradicional - Demo" class="fancybox fancybox.iframe">Demo</a></li>
				<li class="icon more"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/" title="Ver más">Ver más</a></li>
			</ul>
		</div>
	</div>

	<div class="product easy">
		<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/" title="Evatest Easy"><h2 class="heading"><strong>Evatest</strong> <span>Easy</span></h2></a>
		<p>Test rápido de embarazo, fácil, práctico y sin recipientes. Con un 99% de exactitud.</p>
		<div class="callout">
			<ul class="l-inline clearfix">
				<li class="icon demo"><a href="/Evatest_Easy/" title="Evatest Easy - Demo" class="fancybox fancybox.iframe">Demo</a></li>
				<li class="icon more"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/" title="Ver más">Ver más</a></li>
			</ul>
		</div>
	</div>

</div>


<?php get_footer(); ?>
