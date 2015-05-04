<!doctype html>
<!--[if IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=1024">
	<title><?php wp_title(); ?></title>

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css" type="text/css">

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
<?php // nombres de bebes
if ( is_page(array(48,94,535)) ) { ?>
	<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/themes/cupertino/jquery-ui.css">
<?php } ?>

<?php // nombres de bebes
if ( is_page(818) ) { ?>
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jPages.css">
<?php } ?>

</head>

<body <?php body_class(); ?>>

	<header class="site-header">
		<div class="bg">
			<div class="row">
				<div class="small-12 medium-6 columns">
					<h1 class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>" title="Evatest">Evatest</a>
					</h1>
				</div>
				<div class="small-12 medium-6 columns">
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
	<!-- <div id="main">
		<div class="content"> -->
			<nav class="navigation">
				<?php wp_nav_menu( array('menu' => 'evatest', 'items_wrap' => '<ul class="l-inline clearfix menu">%3$s</ul>' )); ?>
			</nav>
