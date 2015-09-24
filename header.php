<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php wp_title(); ?></title>
    <link rel="shortcut icon" href="http://www.evatest.com/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#D82F8B">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">

        <header class="site-header">
            <div class="site-header__container">
                <div class="row">
                    <div class="small-12 columns">

                        <a class="hide-for-large-up left-off-canvas-toggle mobile-menu" href="#"><i class="fa fa-bars"></i> Menu</a>

                        <h1 class="logo"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>

                        <div class="show-for-large-up">
                            <div class="contact">
                                <p>
                                    <span class="contact__phone"><i class="fa fa-phone"></i> 0800 333 4272</span>
                                    <br>
                                    <span class="contact__hours">Lunes a Viernes 9 a 18hs.</span>
                                </p>
                            </div>

                            <ul class="contact-icons">
                                <li>
                                    <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><i class="fa fa-home"></i><span class="visually-hidden"><?php bloginfo('name'); ?></span></a>
                                </li>
                                <li>
                                    <a href="mailto:info@elea.com" title="Envianos un mail"><i class="fa fa-envelope"></i><span class="visually-hidden">Envianos un mail</span></a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/Evatest" title="Seguinos en Facebook"><i class="fa fa-facebook-official"></i><span class="visually-hidden">Seguinos en Facebook</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <aside class="left-off-canvas-menu">
                    <?php wp_nav_menu(
                        array(
                            'menu'      => 'mobile',
                            'container' => '',
                            'menu_class' => 'mobile-nav'
                        )
                    ); ?>
                </aside>
            </div>
        </header>

        <main class="site-content">
            <div class="row">
                <div class="small-12 columns">
                    <nav class="site-navigation show-for-large-up" role="navigation">
                        <?php wp_nav_menu(
                            array(
                                'menu'      => 'evatest',
                                'container' => ''
                            )
                        ); ?>
                    </nav>
                </div>
            </div>
