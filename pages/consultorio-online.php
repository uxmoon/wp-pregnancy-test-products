<?php
/*
Template Name: Consultorio Online
*/

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
	wpcf7_enqueue_scripts();
	wpcf7_enqueue_styles();
}

get_header(); ?>


<div class="header-photo consultorio-online">
	<h1><?php the_title(); ?></h1>
</div>

<div class="entry consultorio-online">

	<h2 class="heading">Hacenos tu consulta</h2>

	<p>¿Querés saber cuáles son las inquietudes de otras mujeres como vos sobre embarazo? Aquí podrás enterarte sobre todo eso y además realizar una consulta personal que una doctora te responderá.</p>

	<div class="contact-form">
		<?php echo do_shortcode( '[contact-form-7 id="313" title="consultorio"]' ); ?>
		<ul class="instructions">
			<li><strong>* Los campos son obligatorios.</strong></li>
			<li>- Todas las preguntas y respuestas  serán publicadas en esta sección.</li>
			<li>- Podés usar tu nombre o un apodo. De esa forma encontrarás más rápido tu respuesta, y mantendrás tu anonimato.</li>
			<li>- En aprox. 48hs podrás ver la respuesta en la sección que elegiste.</li>
			<li class="subscribe"><input type="checkbox" name="subscribe" id="subscribe" value="subscribe" checked /> <label for="subscribe">Me gustaría recibir información sobre Evatest en mi cuenta de correo.</label></li>
		</ul>
	</div>
		<p class="note"><strong>* El Laboratorio Elea se reserva el derecho a publicar tu pregunta.</strong></p>

	<p class="filter-label">Filtrar consultas por:</p>
	<div id="tabs">
	  <ul>
	    <!--<li><a href="#tabs-1">Tab</a></li>-->
	    <li class="first"><a href="/consultas-todas/">Todas</a></li>
	    <li><a href="/consultas-evatest-tradicional/">Classic</a></li>
	    <li><a href="/consultas-evatest-easy/">Easy</a></li>
	    <li><a href="/consultas-evatest-signos/">Signos</a></li>
	    <li><a href="/consultas-evatest-signos-plus/">Signos Plus</a></li>
	    <li><a href="/consultas-evatest-evaplan/">Evaplan</a></li>
	    <li><a href="/consultas-evatest-evaplan-easy/">Evaplan Easy</a></li>
	    <li class="last"><a href="/consultas-otros/">Otros</a></li>
	  </ul>
	  <div id="tabs-1">
	    <p class="is-hidden">EVATEST</p>
	  </div>
	</div>

</div>

<?php get_footer(); ?>
