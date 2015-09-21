        </main>

        <footer class="site-footer">

            <ul class="contact-footer">
                <li class="contact-footer__home">
                    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
                        <i class="fa fa-home"></i><span class="visually-hidden"><?php bloginfo('name'); ?></span>
                    </a>
                </li>
                <li class="contact-footer__mail">
                    <a href="mailto:info@elea.com" title="Envianos un mail"><i class="fa fa-envelope"></i><span class="visually-hidden">Envianos un mail</span></a>
                </li>
                <li class="contact-footer__facebook">
                    <a href="https://www.facebook.com/Evatest" title="Seguinos en Facebook"><i class="fa fa-facebook-official"></i><span class="visually-hidden">Seguinos en Facebook</span></a>
                </li>
                <li class="contact-footer__logo">
                    <h2 class="logo"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h2>
                </li>
                <li class="contact-footer__phone">
                    <span class="contact__phone"><i class="fa fa-phone"></i> 0800 333 4272</span>
                    <span class="contact__hours">Lunes a Viernes 9 a 18hs</span>
                </li>
            </ul>

            <nav class="nav-footer show-for-large-up">
                <?php wp_nav_menu(
                    array(
                        'menu'      => 'nav-footer',
                        'container' => ''
                    )
                ); ?>
            </nav>

            <div class="ev-hr show-for-large-up"></div>

            <div class="site-footer__legal">
                <p>Servicio desarrollado por Laboratorio Elea SACIFyA - Sanabria 2353, Buenos Aires, Argentina. &copy; Copyright 2012 - Todos los derechos reservados. <br>
                    El uso y acceso al sitio www.evatest.com están sujetos a nuestros Términos Generales y Condiciones de Acceso y Visita y nuestra Política de Protección de Datos Personales. <br>
                    Para obtener mayor información diríjase a nuestra Dirección Médica al (54-11) 4379-4300 o por E-mail a <a href="mailto:evatest@elea.com">evatest@elea.com</a></p>
                <p>&copy; 2012. Laboratorio Elea S.A.C.I.F. y A. - Todos los derechos reservados.</p>
            </div>

            <div class="site-footer__terms">
                <p>
                    <a href="<?php echo esc_url( home_url() ); ?>/terminos-y-condiciones/">Términos y condiciones</a> <a href="<?php echo esc_url( home_url() ); ?>/proteccion-de-datos-personales/">Protección de datos personales</a>
                </p>
                <h5><a href="http://www.elea.com/" rel="external" class="logo-elea">Laboratorio ELEA</a></h5>
                <h5><a href="http://guibomedia.com/" rel="external" class="logo-guibomedia">Powered by GUIBOMEDIA</a></h5>
            </div>

        </footer>

        <a class="exit-off-canvas"></a>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
