<?php

// Load jQuery CDN in the footer section
// - - - - - - - - - - - - - - - - - - - - - - - - -

function my_init() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://code.jquery.com/jquery-1.11.3.min.js', false, '1.11.0', true);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_init');

//  Enqueue scripts and styles
// - - - - - - - - - - - - - - - - - - - - - - - - -

function evatest_scripts() {
    //wp_enqueue_style( 'evatheme-style', get_stylesheet_uri() );

    // CSS
    wp_enqueue_style( 'evatheme-stylesheet', get_stylesheet_directory_uri() . '/css/app.css' );

    // MODERNIZR
    wp_enqueue_script( 'evatheme-modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '1', false );

    // jQuery UI for online consulting room
    wp_enqueue_script( 'evatheme-jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js', array('jquery'), '1.8.13', true );

    // optimized foundation tab, offcanvas and interchange, slick and fancybox
    //wp_enqueue_script( 'evatheme-app', get_template_directory_uri() . '/js/evatest.min.js', array('jquery'), '1', true );

    wp_enqueue_script( 'evatheme-foundation', get_template_directory_uri() . '/js/foundation/foundation.js', array('jquery'), '1', true );

    wp_enqueue_script( 'evatheme-interchange', get_template_directory_uri() . '/js/foundation/foundation.interchange.js', array('jquery'), '1', true );
    wp_enqueue_script( 'evatheme-tabs', get_template_directory_uri() . '/js/foundation/foundation.tab.js', array('jquery'), '1', true );
    wp_enqueue_script( 'evatheme-reveal', get_template_directory_uri() . '/js/foundation/foundation.reveal.js', array('jquery'), '1', true );
    wp_enqueue_script( 'evatheme-offcanvas', get_template_directory_uri() . '/js/foundation/foundation.offcanvas.js', array('jquery'), '1', true );

    wp_enqueue_script( 'evatheme-slick', get_template_directory_uri() . '/js/slick.js', array('jquery'), '1', true );

    wp_enqueue_script( 'evatheme-app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1', true );

    // youtube player api
    // if ( is_front_page() || is_home() ) {
    //   wp_enqueue_script( 'evatest-youtube', 'http://www.youtube.com/player_api', array(), '1', true );
    // }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'evatest_scripts' );


// Custom post type - Consultas
// - - - - - - - - - - - - - - - - - - - - - - - - -

function create_post_type() {
    register_post_type( 'consultas',
        array (
            'labels' => array (
                'name'               => __( 'Consultas' ),
                'singular_name'      => __( 'Consulta' ),
                'add_new'            => __( 'Crear nueva' ),
                'add_new_item'       => __( 'Crear nueva Consulta' ),
                'edit'               => __( 'Editar' ),
                'edit_item'          => __( 'Editar consulta' ),
                'new_item'           => __( 'Nueva consulta' ),
                'view'               => __( 'Ver consulta' ),
                'view_item'          => __( 'Ver consulta' ),
                'search_items'       => __( 'Buscar en consultas' ),
                'not_found'          => __( 'No se encontraron consultas' ),
                'not_found_in_trash' => __( 'No se encontraron consultas en la Papelera' )
            ),
            'description'         => __( 'Consultorio online para Evatest.' ),
            'menu_icon'           => 'dashicons-welcome-write-blog',
            'public'              => true,
            'has_archive'         => true,
            'show_ui'             => true,
            'publicly_queryable'  => true,
            'exclude_from_search' => false,
            'capability_type'     => 'post',
            'menu_position'       => 7,
            'query_var'           => true,
            'supports'            => array(
                'title',
                'editor',
                'excerpt',
                'custom-fields'
            ),
            'taxonomies' => array( 'post_tag', 'category')
        )
    );
}

add_action( 'init', 'create_post_type' );

// Form to post - Consulting Room
// - - - - - - - - - - - - - - - - - - - - - - - - -

function my_wpcf7_save($cfdata) {

  $formtitle = $cfdata->title;
  $formdata = $cfdata->posted_data;

      if ( $formtitle == 'consultorio') {

        //$formfield = $formdata['your-name'];
        //$formfield = $formdata['your-email'];
        //$formfield = $formdata['topic'];
        //$formfield = $formdata['your-message'];

        /* Asignación de categoría */
        $formcategory = array (
          19 => "Evaplan",
          22 => "Evaplan Easy",
          17 => "Evatest Easy",
          18 => "Evatest Signos",
          16 => "Evatest Tradicional",
          20 => "Otros",
          24 => "Evatest Signos Plus",
          );

        $newpost = array(
            'post_title'    => $formcategory[ $formdata['topic'] ],
            'post_content'  => $formdata['your-message'],
            'post_category' => array($formdata['topic']),
            'post_status'   => 'pending',
            'post_type'     => 'consultas'
            );

        $writer_name  = ucwords(strtolower($data['your-name']));
        $writer_email = strtolower($data['your-email']);
        $newpostid    = wp_insert_post($newpost);

        add_post_meta($newpostid, 'nombre', $formdata['your-name']);
        add_post_meta($newpostid, 'email', $formdata['your-email']);
    }
}

add_action('wpcf7_before_send_mail', 'my_wpcf7_save',1);

// Product Video Demos Support - http://www.masquewordpress.com/como-subir-archivos-no-permitidos-por-wordpress/
// - - - - - - - - - - - - - - - - - - - - - - - - -

function mqw_mas_extensiones ( $existing_mimes=array() ) {
    $existing_mimes['webm'] = 'video/webm';
    return $existing_mimes;
}

add_filter('upload_mimes', 'mqw_mas_extensiones');

// WordPress Meta Box Plugin
// - - - - - - - - - - - - - - - - - - - - - - - - -

include 'meta-box.php';

// Register sidebar
// - - - - - - - - - - - - - - - - - - - - - - - - -

function theme_slug_widgets_init() {
    register_sidebar (
        array (
            'name'         => __( 'Main Sidebar', 'theme-slug' ),
            'id'           => 'sidebar-1',
            'description'  => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
            'before_title' => '<h1>',
            'after_title'  => '</h1>',
        )
    );
}

add_action( 'widgets_init', 'theme_slug_widgets_init' );

// Theme check - Could not find the comment-reply script enqueued.
// - - - - - - - - - - - - - - - - - - - - - - - - -

function evatheme_scripts_styles() {

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

}

add_action( 'wp_enqueue_scripts', 'evatheme_scripts_styles' );

// Theme check - No content width has been defined. Example:
// - - - - - - - - - - - - - - - - - - - - - - - - -

if ( ! isset( $content_width ) ) {
    $content_width = 600;
}

// Theme check - No reference to post-thumbnails was found in the theme
// - - - - - - - - - - - - - - - - - - - - - - - - -

function evatheme_setup() {
  //load_theme_textdomain( 'twentytwelve', get_template_directory() . '/languages' );

  // This theme styles the visual editor with editor-style.css to match the theme style.
  add_editor_style();

  add_theme_support( 'custom-header' );

  // Adds RSS feed links to <head> for posts and comments.
  add_theme_support( 'automatic-feed-links' );

  add_theme_support( 'custom-background', array(
    'default-color' => 'ffffff',
    ) );

  // This theme uses a custom image size for featured images, displayed on "standard" posts.
  add_theme_support( 'post-thumbnails' );
  //set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}

add_action( 'after_setup_theme', 'evatheme_setup' );

// Disable Emojicons in v 4.2 - http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
// - - - - - - - - - - - - - - - - - - - - - - - - -

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

// Disable emojicons in editor
// - - - - - - - - - - - - - - - - - - - - - - - - -

function disable_emojicons_tinymce( $plugins ) {
    if ( is_array( $plugins ) ) {
        return array_diff( $plugins, array( 'wpemoji' ) );
    } else {
        return array();
    }
}

// Google Analytics
// - - - - - - - - - - - - - - - - - - - - - - - - -

function add_this_script_footer(){ ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-556063-30', 'auto');
ga('send', 'pageview');

</script>

<?php }
add_action('wp_footer', 'add_this_script_footer');


// Remove junk from head section
// - - - - - - - - - - - - - - - - - - - - - - - - -
remove_action('wp_head', 'rsd_link'); // remove really simple discovery link
remove_action('wp_head', 'wp_generator'); // remove wordpress version

remove_action('wp_head', 'feed_links', 2); // remove rss feed links (make sure you add them in yourself if youre using feedblitz or an rss service)
remove_action('wp_head', 'feed_links_extra', 3); // removes all extra rss feed links

remove_action('wp_head', 'index_rel_link'); // remove link to index page
remove_action('wp_head', 'wlwmanifest_link'); // remove wlwmanifest.xml (needed to support windows live writer)

remove_action('wp_head', 'start_post_rel_link', 10, 0); // remove random post link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // remove parent post link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // remove the next and previous post links
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0 );


// Contact Form 7 Custom Ajax Loader
// - - - - - - - - - - - - - - - - - - - - - - - - -
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
function my_wpcf7_ajax_loader () {
    return  get_bloginfo('stylesheet_directory') . '/images/preloader.gif';
}


// Media element load css only on modal pages
// - - - - - - - - - - - - - - - - - - - - - - - - -

// function theme_name_scripts() {
// if ( !is_admin() && is_page(array(6109,6138,6142,7216,13642)) ) {
//     wp_enqueue_style( 'mediaelement-css', get_stylesheet_directory_uri() . '/css/mediaelement/mediaelementplayer.css', array(), '', 'all' );
//     wp_enqueue_style( 'mediaelement-skin-css', get_stylesheet_directory_uri() . '/css/mediaelement/mejs-skins.css', array(), '', 'all' );
//   }
// }
// add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
