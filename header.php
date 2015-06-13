<!DOCTYPE html>
<!--[if lt IE 9]> <html <?php language_attributes(); ?> class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]> <html <?php language_attributes(); ?> class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="http://www.evatest.com/favicon.ico" type="image/x-icon">

    <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie/html5shiv.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie/nwmatcher-1.2.5-min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie/selectivizr-1.0.3b.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

    <header class="site-header">
        <div class="bg">
            <div class="row">
                <div class="small-12 medium-6 large-6 columns">
                    <h1 class="logo">
                        <a href="<?php echo esc_url( home_url() ); ?>" title="Evatest">Evatest</a>
                    </h1>
                </div>
                <div class="small-12 medium-6 large-6 columns">
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
                </div>
            </div>
        </div>
    </header>

    <main class="site-content">

        <nav class="navigation row show-for-medium-up">
            <div class="large-12 columns">
                <?php wp_nav_menu(
                    array(
                        'menu'       => 'evatest',
                        'container' => ''
                        //'menu_class' => 'miclase'
                        //'items_wrap' => '<ul class="l-inline clearfix menu">%3$s</ul>'
                    )
                ); ?>
            </div>
        </nav>
