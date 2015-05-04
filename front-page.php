<?php
/*
Template Name: Front page
*/
?>
<?php get_header(); ?>

	<div class="row">
		<div class="small-12 columns">
			<div class="slider">
				<?php if ( function_exists( 'meteor_slideshow' ) ) { meteor_slideshow(); } ?>
			</div>
		</div>
	</div>

	<section class="home-services">

		<div id="msj" style="display:none;">
			<div class="content">
				<div class="arrow"></div>
				<div id="msj_cerrar"><a href="javascript: return false;" onclick="mensajeHide();">cerrar</a></div>
				<div id="msj_txt"></div>
			</div>
		</div>

		<div class="row">
			<div class="small-12 columns">
				<h2 class="home-services__title">Conocé todo lo que evatest tiene para ofrecerte</h2>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-4 columns item">
				<div class="thumb">
					<a href="<?php echo esc_url( home_url() ); ?>/consultorio-online/">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/stock/stock-02.jpg" alt="Hacé tu consulta. Consultorio online.">
					</a>
				</div>
				<p class="call-to-action">
					<a href="<?php echo esc_url( home_url() ); ?>/consultorio-online/" title="Hacé tu consulta. Consultorio Online."><strong>Hacé tu consulta</strong> Consultorio Online</a>
				</p>
			</div>
			<div class="small-12 medium-4 columns item">
				<div class="thumb">
					<a href="<?php echo esc_url( home_url() ); ?>/evatest-news/">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/images/stock/stock-03.jpg" alt="Todo sobre la salud de la mujer">
					</a>
				</div>
				<p class="call-to-action">
					<a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/" title="Todo sobre la salud de la mujer"><strong>Evatest </strong>News</a>
				</p>
			</div>
			<div class="small-12 medium-4 columns item">

				<div class="calculator">

					<h3 class="calculator__title">
						<strong>Calculadora</strong> de ovulación
					</h3>

					<div class="row">
						<div class="small-6 columns">
							<div class="calculator__fields">
								<input name="txt_1" class="field" id="txt_1" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>

								<input name="txt_2" class="field" id="txt_2" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>

								<input name="txt_3" class="field" id="txt_3" onkeypress="return acceptNum(event)" value="" size="2" maxlength="2"/>
							</div>
							<p class="calculator__note">Períodos mayores a 20 <br/> días y menores a 45</p>
						</div>
						<div class="small-6 columns">
							<p class="calculator__instructions">Ingresá la cantidad de días de duración de tus últimos 3 ciclos.</p>
						</div>
					</div>
					<a href="javascript: var a = ovulacion ();" class="calculator__button" title="Calcular">Calcular</a>
				</div>

				<p class="call-to-action"><strong>Probá la calculadora</strong> de ovulación</p>
			</div>
		</div>
	</section>

	<section class="home-products">

		<div class="row">
			<div class="small-12 columns">
				<h3 class="home-products__title">Y vos ¿Cuál elegís?</h3>
			</div>
		</div>

		<div class="row">
			<div class="small-12 medium-12 large-4 columns">
				<div class="product signos">

					<img src="<?php echo bloginfo('template_directory'); ?>/images/products/products-01.png" alt="" class="show-for-large-up">

					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/" title="Evatest Signos">
						<h2 class="heading"><strong>Evatest</strong> <span>Signos Plus</span></h2>
					</a>

					<p>El test de embarazo más completo: resultado en signos, hasta 4 días antes y con un 99% de exactitud.</p>

					<div class="row collapse">
						<div class="small-6 columns">
							<a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos Plus - Demo">Demo</a>
						</div>
						<div class="small-6 columns">
							<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/" title="Ver más">Ver más</a>
						</div>
					</div>

					<div class="callout">
						<ul class="l-inline clearfix">
							<li class="icon demo"><a href="/Evatest_Signos_Plus/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos Plus - Demo">Demo</a></li>
							<li class="icon more"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-signos-plus/" title="Ver más">Ver más</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="small-12 medium-12 large-4 columns">
				<div class="product tradicional">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/products/products-02.png" alt="" class="show-for-large-up">>
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/" title="Evatest Tradicional">
						<h2 class="heading"><strong>Evatest</strong> <span>Classic</span></h2>
					</a>
					<p>Clásico test de embarazo,  con un 99% de exactitud.</p>
					<div class="callout">
						<ul class="l-inline clearfix">
							<li class="icon demo"><a href="/Evatest_Classic/" title="Evatest Tradicional - Demo" class="fancybox fancybox.iframe">Demo</a></li>
							<li class="icon more"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-tradicional/" title="Ver más">Ver más</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="small-12 medium-12 large-4 columns">
				<div class="product easy">
				<img src="<?php echo bloginfo('template_directory'); ?>/images/products/products-03.png" alt="" class="show-for-large-up">>
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/" title="Evatest Easy">
						<h2 class="heading"><strong>Evatest</strong> <span>Easy</span></h2>
					</a>
					<p>Test rápido de embarazo, fácil, práctico y sin recipientes. Con un 99% de exactitud.</p>
					<div class="callout">
						<ul class="l-inline clearfix">
							<li class="icon demo"><a href="/Evatest_Easy/" title="Evatest Easy - Demo" class="fancybox fancybox.iframe">Demo</a></li>
							<li class="icon more"><a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evatest-easy/" title="Ver más">Ver más</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>
