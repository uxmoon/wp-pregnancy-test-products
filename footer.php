<!-- 	</div>
</div> -->

</main>


<footer class="site-footer">
	<div class="row">
		<div class="small-12 medium-2 large-3 columns">
			<h1 class="logo--footer">
				<a href="<?php echo esc_url( home_url() ); ?>" title="Evatest">EVATEST</a>
			</h1>
			<div class="contact-info">
				<p class="contact-info__phone"><i class="icon-phone"></i> 0800-333-4272</p>
				<p class="contact-info__hours">Lunes a Viernes 10 a 17hs</p>
				<ul class="contact-info__icons">
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>" title="Inicio">
							<i class="icon-home"></i> <span class="visually-hidden">Inicio</span>
						</a>
					</li>
					<li>
						<a href="mailto:info@elea.com" title="Contáctanos" target="_blank">
							<i class="icon-mail"></i> <span class="visually-hidden">Contáctenos</span>
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/Evatest" title="Seguínos en Facebook" target="_blank">
							<i class="icon-social"></i> <span class="visually-hidden">Seguinos en Facebook</span>
						</a>
					</li>
				</ul>
			</div>
			<h2 class="logo-elea">
				<a href="http://www.elea.com/" target="_blank" title="Laboratorio ELEA">Laboratorio ELEA</a>
			</h2>
		</div>
		<div class="small-12 medium-6 large-3 columns">
			<h3>
				<a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/" title="Consejos para embarazadas">Consejos para embarazadas</a>
			</h3>
			<?php wp_nav_menu(
				array(
					'menu'       => 'consejos-para-embarazadas',
					'items_wrap' => '<ul class="l-stacked">%3$s</ul>'
				)
			); ?>

			<h3>
				<a href="<?php echo esc_url( home_url() ); ?>/salud-femenina/" title="Salud femenina">Salud femenina</a>
			</h3>

			<h3>
				<a href="<?php echo esc_url( home_url() ); ?>/consultorio-online/" title="Consultorio online">Consultorio online</a>
			</h3>

		</div>
		<div class="small-12 medium-6 large-3 columns">
			<h3>
				<a href="<?php echo esc_url( home_url() ); ?>/test-de-embarazo/" title="Test de embarazo">Test de embarazo</a>
			</h3>

			<?php wp_nav_menu(
				array(
					'menu' => 'test-de-embarazo',
					'items_wrap' => '<ul class="l-stacked">%3$s</ul>'
				)
			); ?>

			<h3>
				<a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/" title="Decidir ser padres">Decidir ser padres</a>
			</h3>

			<?php wp_nav_menu(
				array(
					'menu' => 'decidir-ser-padres',
					'items_wrap' => '<ul class="l-stacked">%3$s</ul>'
				)
			); ?>

		</div>
		<div class="small-12 medium-6 large-3 columns">



		</div>
		<div class="small-12 medium-6 large-3 columns">
			<h3>
				<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/" title="Línea EVATEST">Línea EVATEST</a>
			</h3>

			<?php wp_nav_menu(
				array(
					'menu' => 'linea-evatest',
					'items_wrap' => '<ul class="l-stacked">%3$s</ul>'
				)
			); ?>

			<h3><a href="<?php echo esc_url( home_url() ); ?>/nombres-de-bebes/" title="Nombres de bebés">Nombres de bebés</a></h3>
		</div>
	</div>
	<div class="row">
		<div class="small-12 columns show-for-medium-up">
			<div class="copy">
				<p>Servicio desarrollado por Laboratorio Elea SACIFyA - Sanabria 2353, Buenos Aires, Argentina. &copy; Copyright 2012 - Todos los derechos reservados.</p>

				<p>El uso y acceso al sitio www.evatest.com están sujetos a nuestros Términos Generales y Condiciones de Acceso y Visita y nuestra Política de Protección de Datos Personales.</p>

				<p>Para obtener mayor información diríjase a nuestra Dirección Médica al (54-11) 4379-4300 o por E-mail a <a href="mailto:evatest@elea.com">evatest@elea.com</a></p>

				<p class="highlight">&copy; 2012. Laboratorio Elea S.A.C.I.F. y A. - Todos los derechos reservados.</p>

				<p class="links"><a href="<?php echo esc_url( home_url() ); ?>/terminos-y-condiciones/" title="Términos y condiciones">Términos y condiciones</a> | <a href="<?php echo esc_url( home_url() ); ?>/proteccion-de-datos-personales/" title="Protección de datos personales">Protección de datos personales</a></p>
			</div>
		</div>
	</div>
	<p class="developer"><a href="http://guibomedia.com/" title="Desarrollado por GuiboMedia">Powered by GuiboMedia</a></p>
</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/calculadora.min.js"></script>

<script type="text/javascript">
	jQuery('video').mediaelementplayer({
	alwaysShowControls: true,
	});
</script>

<script>
    jQuery('.slider-slick-home').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false,
        infinite: true,
        pauseOnHover: false,
        //slide: 'div.slide-posta-raices',
        speed: 400
    });
</script>

<?php //if ( is_front_page() ) { ?>
<?php if ( is_page('demo') ) { ?>

	<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.fancybox').fancybox();
	});
	</script>
	<script src="http://www.youtube.com/player_api"></script>
	<script>
	function onYouTubePlayerAPIReady() {
	    jQuery(document).ready(function () {
	        jQuery.fancybox({
	            href: "http://www.youtube.com/embed/3BnkoJvD5uk?enablejsapi=1&wmode=opaque&autoplay=1",
	            //href: "http://www.youtube.com/embed/KL-k5kXqBCE?rel=0&amp;autoplay=1",
	            type: "iframe",
	            beforeShow: function () {
	                // Find the iframe ID
	                var id = jQuery.fancybox.inner.find('iframe').attr('id');
	                // Create video player object and add event listeners
	                var player = new YT.Player(id, {
	                    events: {
	                        'onStateChange': function (event) {
	                            if (event.data === 0) {
	                                jQuery.fancybox.close();
	                            } // if
	                        } // onStateChange
	                    } // events
	                }); // YT.Player
	            } // beforeShow
	        }); // fancybox
	    }); // ready
	} // onYouTubePlayerAPIReady
	</script>
<?php }
//nombres de bebés
elseif ( is_page(array(48,94,535)) ) {
?>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js"></script>
	<script>
		jQuery("document").ready(function() {
			jQuery( "#tabs" ).tabs();
		});
	</script>

<?php }
// el codigo aparece en todo el sitio
// el js solo se carga en las siguientes páginas
// para hacer en el futuro, sólo hay que listar las páginas donde no es necesario cargar el fancybox por ej array(!(1,2,3))
elseif (
	is_page(
		array(
			39,40,216,196,212,213,215,214,41,228,223,224,225,227,226,42,222,217,218,219,221,220,1123,13507
			)
		)
	) {
?>
<?php }
//testing page id: 818
elseif ( is_page(array(818)) ) {
?>

	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/archives.js" type="text/javascript"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jPages.min.js"></script>

	<script type="text/javascript">
		jQuery(function() {
			jQuery("#archive-browser select").change(function() {
			// dynamically load the archives
			});
		});
		jQuery("div.holder").jPages({
			containerID : "#archive-pot"
		});
	</script>

<?php }
//Consultorio online
if ( is_page(array(46)) ) {
?>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript">
		jQuery(function() {
			var hijax = function(panel) {
				jQuery('a.page', panel).click(function(){
					jQuery(panel).load(this.href, {}, function() {
						hijax(this);
					});
					return false;
				});
			};
			jQuery("#tabs").tabs({
				ajaxOptions: {
					error: function(xhr, status, index, anchor) {
						jQuery(anchor.hash).html("Error");
					},
				},
				load: function(event, ui) {
					hijax(ui.panel);

				}
			});
		});
	</script>

<?php }
// unknown page
elseif ( is_page(21351) ) {
?>

	<script type="text/javascript">
		jQuery('#archive-pot').on('click', '.wp-paginate a', function(e){
			e.preventDefault();
			var link = jQuery(this).attr('href');
			jQuery('#archives-table').fadeOut(500, function(){
				jQuery(this).load(link + ' #archives-table').fadeIn(500);
			});
		});
	</script>

<?php } ?>

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/fancybox/jquery.fancybox.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.fancybox')
		.fancybox({
			scrolling : 'no'
		});
	});
</script>

</body>
</html>