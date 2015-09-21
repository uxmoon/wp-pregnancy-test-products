<?php
/*
Template Name: Fancybox
*/
?>

<!DOCTYPE html>
<html lang="es-AR">
<head>
    <meta charset="UTF-8">
    <title>Evatest</title>
    <!-- css -->
    <link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri() ?>/mediaelement/mediaelement/mediaelementplayer.css' type='text/css' media='all' />

    <!-- jquery -->
    <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='https://code.jquery.com/jquery-migrate-1.2.1.min.js'></script>

    <!-- media element js -->
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri() ?>/mediaelement/mediaelement/mediaelement-and-player.min.js'></script>

    <style>
        * {
            margin: 0;
            padding: 0;
        }
        .wp-video {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .mejs-container .mejs-controls {
            bottom: -30px !important;
        }
    </style>
</head>
<body>
    <script>
        var $ = jQuery.noConflict();
    </script>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <script>
        // video demos
        $('video').mediaelementplayer({
            alwaysShowControls: true,
            defaultVideoHeight: 400,
        });
    </script>

</body>
</html>
