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
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/linea-evatest/linea-evatest-signos-plus.jpg" alt="Evatest Signos Plus" />
        </div>
        <div class="small-12 medium-5 medium-pull-7 columns">
            <h4 class="product__title">Evatest Signos Plus</h4>
            <p class="product__description">Fácil de hacer y fácil de leer, resultado cuatro días antes, y con un 99% de exactitud.</p>
            <a href="#" class="button button--demo" title="Ver Demo" data-reveal-id="videoModal-<?php echo $post->ID ?>"><i class="fa fa-video-camera"></i> Demo</a>
            <a href="<?php echo $upload_dir['baseurl']; ?>/manual/manual-evatest-signos-plus.pdf" title="Descargá el Manual" class="button button--more" target="_blank">Manual <i class="fa fa-file-pdf-o"></i></a>

            <!-- reveal modal -->
            <div id="videoModal-<?php echo $post->ID ?>" class="reveal-modal large" data-reveal aria-labelledby="videoModalTitle" aria-hidden="true" role="dialog">
                <h2 id="videoModalTitle" class="reveal-modal__title">Evatest Signos Plus</h2>
                <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/UgyfhTZTutM" frameborder="0" allowfullscreen></iframe>
                </div>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>

        </div>
    </div>
</div>
