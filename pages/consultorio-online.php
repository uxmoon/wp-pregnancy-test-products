<?php
/*
Template Name: Consultorio Online
*/

if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
    wpcf7_enqueue_scripts();
    //wpcf7_enqueue_styles();
}

get_header(); ?>

<article>
    <header class="article__header row">
        <div class="small-12 medium-9 small-centered columns">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/headers/consultorio-online.jpg" alt="Evatest">
            <h1>Consultorio Online</h1>
            <h2>Hacenos una consulta</h2>
            <p>¿Querés saber cuáles son las inquietudes de otras mujeres como vos sobre embarazo? Aquí podrás enterarte sobre todo eso y además realizar una consulta personal que una doctora te responderá.</p>
        </div>
    </header>
    <div class="article__content">
        <div class="row">
            <div class="small-12 medium-9 small-centered columns">
                <div class="contact-form">
                    <div class="row">
                        <div class="small-12 medium-6 large-6 columns">
                            <?php echo do_shortcode( '[contact-form-7 id="313" title="consultorio"]' ); ?>
                        </div>
                        <div class="consultorio-online__instructions small-12 medium-6 columns">
                            <p class="contact-form__required"><strong>* Los campos son obligatorios.</strong></p>
                            <ul class="contact-form__instructions">
                                <li>Todas las preguntas y respuestas  serán publicadas en esta sección.</li>
                                <li>Podés usar tu nombre o un apodo. De esa forma encontrarás más rápido tu respuesta, y mantendrás tu anonimato.</li>
                                <li>En aprox. 48hs podrás ver la respuesta en la sección que elegiste.</li>
                            </ul>
                            <div class="row collapse contact-form__subscription">
                                <div class="small-1 columns">
                                    <input type="checkbox" name="subscribe" id="subscribe" value="subscribe" checked />
                                </div>
                                <div class="small-11 columns">
                                    <label for="subscribe">Me gustaría recibir información sobre Evatest en mi cuenta de correo.</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="ev-note">* El Laboratorio Elea se reserva el derecho a publicar tu pregunta.</p>
                <section class="ev-questions">

                    <p class="filter-label">Filtrar consultas por:</p>

                    <div id="tabs">
                        <ul>
                            <li class="first"><a href="/consultas-todas/">Todas</a></li>
                            <li><a href="/consultas-evatest-tradicional/">Classic</a></li>
                            <li><a href="/consultas-evatest-easy/">Easy</a></li>
                            <li><a href="/consultas-evatest-signos/">Signos</a></li>
                            <li><a href="/consultas-evatest-signos-plus/">Signos Plus</a></li>
                            <!-- <li><a href="/consultas-evatest-evaplan/">Evaplan</a></li> -->
                            <li><a href="/consultas-evatest-evaplan-easy/">Evaplan Easy</a></li>
                            <li class="last"><a href="/consultas-otros/">Otros</a></li>
                        </ul>
                      <div id="tabs-1">
                        <p class="hide">EVATEST</p>
                      </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</article>

<?php get_footer(); ?>
