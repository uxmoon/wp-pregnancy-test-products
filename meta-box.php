<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 * @link http://www.deluxeblogtips.com/meta-box/
 */


add_filter( 'rwmb_meta_boxes', 'elea_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "elea" to actual prefix in your project
 *
 * @return void
 */
function elea_register_meta_boxes( $meta_boxes )
{
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
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
			// URL
			array(
				'name'  => __( 'URL', 'meta-box' ),
				'id'    => "{$prefix}url_slide",
				'desc'  => __( '', 'meta-box' ),
				'type'  => 'url',
				'std'   => 'http://www.evatest.com',
			)
		)
	);

	return $meta_boxes;
}

