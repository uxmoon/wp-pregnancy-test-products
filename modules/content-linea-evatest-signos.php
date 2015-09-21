<?php
wp_nav_menu(
    array(
        'container'       => 'nav',
        'container_class' => 'nav-products',
        'menu'            => 'productos',
    )
);

$upload_dir = wp_upload_dir();
?>

<div class="product product--intro">
    <div class="row">
        <div class="small-12 medium-7 medium-push-5 columns">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-signos.jpg" alt="Evatest Signos" />
        </div>
        <div class="small-12 medium-5 medium-pull-7 columns">
            <h4 class="product__title">Evatest Signos</h4>
            <p class="product__description">De fácil lectura, resultado cuatro días antes, y con un 99% de exactitud.</p>
            <a href="/Evatest_Signos/" title="Ver Demo" class="fancybox fancybox.iframe view-demo button button--demo"><i class="fa fa-video-camera"></i> <br> Demo</a>
            <a href="<?php echo $upload_dir['baseurl']; ?>/manual/Evatest-Signos.pdf" title="Descargá el Manual" class="button button--more" target="_blank">Manual <i class="fa fa-file-pdf-o"></i></a>
        </div>
    </div>
</div>
