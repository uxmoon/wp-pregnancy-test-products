<?php
add_filter( 'rwmb_meta_boxes', 'elea_register_meta_boxes' );

function elea_register_meta_boxes( $meta_boxes )
{

    // Better has an underscore as last sign
    $prefix = 'elea_';

    // 1st meta box
    $meta_boxes[] = array(
        // Meta box id, UNIQUE per meta box. Optional since 4.1.5
        'id' => 'standard',

        // Meta box title - Will appear at the drag and drop handle bar. Required.
        'title' => __( 'Link', 'meta-box' ),

        // Post types, accept custom post types as well - DEFAULT is array('post'). Optional.
        'pages' => array( 'evatest_slider' ),

        // Where the meta box appear: normal (default), advanced, side. Optional.
        'context' => 'normal',

        // Order of meta box: high (default), low. Optional.
        'priority' => 'high',

        // Auto save: true, false (default). Optional.
        'autosave' => true,

        // List of meta fields
        'fields' => array(
            array(
                'name'             => __( 'Foto', 'meta-box' ),
                'id'               => "{$prefix}img_slide",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'name'             => __( 'Foto Mobile', 'meta-box' ),
                'id'               => "{$prefix}img_slide_mobile",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            // URL
            array(
                'name'  => __( 'Vínculo', 'meta-box' ),
                'id'    => "{$prefix}url",
                'desc'  => __( '', 'meta-box' ),
                'type'  => 'text',
                'std'   => __( '', 'your-prefix' ),
                'clone' => false,
            )

        )
    );

    $meta_boxes[] = array(
        'id'       => 'home_products',
        'title'    => __( 'Productos destacados', 'meta-box' ),
        'pages'    => array( 'product' ),
        'context'  => 'normal',
        'priority' => 'high',
        'autosave' => true,
        'fields' => array(
            array(
                'name'             => __( 'Foto', 'meta-box' ),
                'id'               => "{$prefix}img_slide",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'name'             => __( 'Foto Mobile', 'meta-box' ),
                'id'               => "{$prefix}img_slide_mobile",
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'name' => __( 'Descripción', 'meta-box' ),
                'desc' => __( '', 'meta-box' ),
                'id'   => "{$prefix}product_description",
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 3,
            ),
            array(
                'name'  => __( 'Vínculo', 'meta-box' ),
                'desc'  => __( '', 'meta-box' ),
                'id'    => "{$prefix}url",
                'type'  => 'text',
                'std'   => __( '', 'your-prefix' ),
                'clone' => false,
            ),
            // array(
            //     'name'  => __( 'Demo', 'meta-box' ),
            //     'id'    => "{$prefix}product_demo",
            //     'desc'  => __( 'Vínculo a la página que contiene el vídeo ej. /evatest_signos_plus/', 'meta-box' ),
            //     'type'  => 'text',
            //     'std'   => __( '', 'meta-box' ),
            //     'clone' => false,
            // ),

            // URL
            array(
                'name' => __( 'URL YouTube', 'meta-box' ),
                'id'   => "{$prefix}url_youtube",
                'desc' => __( '', 'meta-box' ),
                'type' => 'url',
                'std'  => '',
            ),
        )
    );

    return $meta_boxes;
}

