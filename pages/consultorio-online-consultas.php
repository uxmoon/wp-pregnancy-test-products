<?php
/*
Template Name: Consultorio Online - Consultas
*/
?>
<!DOCTYPE html>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="robots" content="noindex,nofollow"/>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" type="text/css" />
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel='stylesheet' id='wp-paginate-css'  href='<?php echo get_stylesheet_directory_uri('wpurl') ?>/wp-content/plugins/wp-paginate/wp-paginate.css' type='text/css' media='screen' />
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
</head>

<body class="consultas-page">

	<div class="consultas-posts">

	<?php

		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}

		if ( is_page(1314) ) {
			// todas
			query_posts( array('post_type' => 'consultas', 'posts_per_page' => 3, 'paged' => $paged));

		} elseif ( is_page(1301) ) {
			// easy
			query_posts( array('post_type' => 'consultas', 'category_name' => 'evatest-easy',  'posts_per_page' => 3, 'paged' => $paged));

		} elseif ( is_page(1297) ) {
			// classic
			query_posts( array('post_type' => 'consultas', 'category_name' => 'evatest-tradicional',  'posts_per_page' => 3, 'paged' => $paged));

		} elseif ( is_page(1303) ) {
			// signos
			query_posts( array('post_type' => 'consultas', 'category_name' => 'evatest-signos',  'posts_per_page' => 3, 'paged' => $paged));

		} elseif ( is_page(13908) ) {
			// signos plus
			query_posts( array('post_type' => 'consultas', 'category_name' => 'evatest-signos-plus',  'posts_per_page' => 3, 'paged' => $paged));

		} elseif ( is_page(1308) ) {
            // evaplan
			// evaplan easy
			query_posts( array(
                'post_type'      => 'consultas',
                // 'category_name'  => 'evaplan',
                // 'category_name'  => 'evaplan-easy',
                'category_name'  => 'evaplan', 'evaplan-easy',
                'posts_per_page' => 3,
                'paged'          => $paged
            ));

		//} elseif ( is_page(1305) ) {
			// evaplan
			//query_posts( array('post_type' => 'consultas', 'category_name' => 'evaplan',  'posts_per_page' => 3, 'paged' => $paged));

		} elseif ( is_page(1312) ) {
			// otros
			query_posts( array('post_type' => 'consultas', 'category_name' => 'otros',  'posts_per_page' => 3, 'paged' => $paged));
		}

	?>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<div class="query-item clearfix">

			<div class="date-box">
				<span class="post-date">
					<?php echo get_the_date('M'); ?>
					<span class='dia'><?php echo get_the_date('j');?></span>
				</span>
			</div>

			<p class="user"><strong><?php echo get_post_meta($post->ID, 'nombre', true); ?> pregunto:</strong></p>

			<div class="question">
				<?php the_content(); ?>
			</div>

			<p class="user"><strong>Evatest responde:</strong></p>
			<div class="answer">
				<?php the_excerpt(); ?>
			</div>

		</div>


	<?php endwhile; ?>

	<?php
		if(function_exists('wp_paginate')) {
			wp_paginate();
		}
	?>
	</div>
</body>
</html>
