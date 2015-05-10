<?php wp_nav_menu(
    array(
        'menu'       => 'productos',
        'items_wrap' => '<ul class="l-inline clearfix menu-products">%3$s</ul>'
        )
    );
?>

<div class="row">
    <div class="large-8 large-push-4 columns">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/signos.jpg" alt="Evatest Signos" />
    </div>
    <div class="large-4 large-pull-8 columns">
        <p class="info">Test  de fácil lectura porque muestra su resultado en signos, resultados hasta 4 días antes de la menstruación. Con un 99% de exactitud.</p>

        <p class="demo">
            <?php $upload_dir = wp_upload_dir(); ?>
            <a href="/Evatest_Signos/" class="fancybox fancybox.iframe view-demo" title="Evatest Signos - Demo">Demo</a>
            <a href="<?php echo $upload_dir['baseurl']; ?>/manual/Evatest-Signos.pdf" class="download" target="_blank">Descarga el manual</a>
        </p>
    </div>
</div>
