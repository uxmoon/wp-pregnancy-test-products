<?php

function my_init()
{
    if (!is_admin())
    {
        wp_deregister_script('jquery');

        // Load a copy of jQuery from the Google API CDN
        // The last parameter set to TRUE states that it should be loaded
        // in the footer.
        wp_register_script('jquery', 'https://code.jquery.com/jquery-1.11.3.min.js', false, '1.11.0', true);

        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_init');

/* -------------------------------------------------------------------
PLUGIN MEDIA ELEMENT - CSS LOAD TO SPECIFIC PAGES
------------------------------------------------------------------- */

function theme_name_scripts() {
if ( !is_admin() && is_page(array(6109,6138,6142,7216,13642)) ) {
    wp_enqueue_style( 'mediaelement-css', get_stylesheet_directory_uri() . '/css/mediaelement/mediaelementplayer.css', array(), '', 'all' );
    wp_enqueue_style( 'mediaelement-skin-css', get_stylesheet_directory_uri() . '/css/mediaelement/mejs-skins.css', array(), '', 'all' );
  }
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

/* -------------------------------------------------------------------
PLUGIN MEDIA ELEMENT - CSS LOAD TO SPECIFIC PAGES
------------------------------------------------------------------- */
function evatest_scripts() {
  //wp_enqueue_style( 'evatheme-style', get_stylesheet_uri() );

  // CSS
  wp_enqueue_style( 'evatheme-stylesheet', get_stylesheet_directory_uri() . '/css/app.css' );
  //wp_enqueue_style( 'evatheme-font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
  // wp_enqueue_style( 'evatheme-consultas', get_stylesheet_directory_uri() . '/css/consultas.css' );
  // wp_enqueue_style( 'evatheme-fancybox', get_stylesheet_directory_uri() . '/css/fancybox.css' );

  // MODERNIZR
  wp_enqueue_script( 'evatheme-modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', array(), '1', false );
  wp_enqueue_script( 'evatheme-jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js', array('jquery'), '1.8.13', true );
  wp_enqueue_script( 'evatheme-app', get_template_directory_uri() . '/js/evatest.min.js', array('jquery'), '1', true );

  // FOUNDATION
  // wp_enqueue_script( 'evatheme-foundation-js', get_template_directory_uri() . '/js/foundation/foundation.js', array('jquery'), '1', true );
  // wp_enqueue_script( 'evatheme-foundation-js-tab', get_template_directory_uri() . '/js/foundation/foundation.tab.js', array('jquery'), '1', true );
  // wp_enqueue_script( 'evatheme-foundation-js-offcanvas', get_template_directory_uri() . '/js/foundation/foundation.offcanvas.js', array('jquery'), '1', true );
  // wp_enqueue_script( 'evatheme-foundation-js-interchange', get_template_directory_uri() . '/js/foundation/foundation.interchange.js', array('jquery'), '1', true );

  // CONSULTORIO ONLINE
  // wp_enqueue_script( 'evatheme-jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.13/jquery-ui.min.js', array('jquery'), '1.8.13', true );

  // FANCYBOX SOON TO BE REPLACED WITH FOUNDATION REVEAL
  // wp_enqueue_script( 'evatest-fancybox-pack', get_template_directory_uri() . '/fancybox/jquery.fancybox.pack.js', array('jquery'), '1', true );

  // SLICK SLIDER
  // wp_enqueue_script( 'evatheme-slick', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1', true );

  // APP
  // wp_enqueue_script( 'evatheme-app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1', true );

  // if ( is_front_page() || is_home() ) {
  //   wp_enqueue_script( 'evatest-youtube', 'http://www.youtube.com/player_api', array(), '1', true );
  // }

  //wp_enqueue_script( 'evatest-archives', get_template_directory_uri() . '/js/archives.js', array(), '1', true );
  //wp_enqueue_script( 'evatest-jpages',  get_template_directory_uri() . '/js/jPages.min.js', array(), '1', true );
  // if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  //  wp_enqueue_script( 'comment-reply' );
  // }
}
add_action( 'wp_enqueue_scripts', 'evatest_scripts' );


/* -------------------------------------------------------------------
CUSTOM POST TYPE - CONSULTAS
------------------------------------------------------------------- */

function create_post_type() {
  register_post_type( 'consultas',
    array(
      'labels'             => array(
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

/* -------------------------------------------------------------------
CONSULTORIO ONLINE - FORM TO POST
------------------------------------------------------------------- */

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

/* -------------------------------------------------------------------
PLAYER METEOR SLIDES
------------------------------------------------------------------- */

// function remove_meteorslides_scripts() {
//   if ( !is_front_page() ) {
//     remove_action( 'wp_print_scripts', 'meteorslides_javascript' );
//     remove_action( 'wp_enqueue_scripts', 'meteorslides_css' );
// }
// }
// add_action( 'get_header', 'remove_meteorslides_scripts' );

/* -------------------------------------------------------------------
NEWSLETTER - DESACTIVADO
------------------------------------------------------------------- */

// function wysija_contactform7_subscribe($cfdata) {
//   $formdata = $cfdata->posted_data;
//   /* if you use different name/id attribute for CF7 please change 'your-name' and 'your-email' */
//   $user_name = $formdata['your-name'];
//   $user_email = $formdata['your-email'];
//    change this according to your user list id you want this user to subscribe,
//   $listID = array( '1' );
//   $userData=array(
//     'email'   =>  $user_email,
//     'firstname' =>  $user_name
//     );
//   $data=array(
//     'user'    =>  $userData,
//     'user_list' =>  array( 'list_ids'=> $listID )
//     );
//   $userHelper=&WYSIJA::get('user','helper');
//   $userHelper->addSubscriber($data);
// }
//add_action('wpcf7_mail_sent', 'wysija_contactform7_subscribe', 1);

/* -------------------------------------------------------------------
VIDEOS DEMOS
http://www.masquewordpress.com/como-subir-archivos-no-permitidos-por-wordpress/
------------------------------------------------------------------- */

function mqw_mas_extensiones ( $existing_mimes=array() ) {
  $existing_mimes['webm'] = 'video/webm';
  return $existing_mimes;
}
add_filter('upload_mimes', 'mqw_mas_extensiones');

/* -------------------------------------------------------------------
META BOX
------------------------------------------------------------------- */
include 'meta-box.php';

/* -------------------------------------------------------------------
Theme check - REGISTER SIDEBAR
------------------------------------------------------------------- */
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name'         => __( 'Main Sidebar', 'theme-slug' ),
        'id'           => 'sidebar-1',
        'description'  => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_title' => '<h1>',
        'after_title'  => '</h1>',
        ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );

/* -------------------------------------------------------------------
Theme check - Could not find the comment-reply script enqueued.
------------------------------------------------------------------- */
function evatheme_scripts_styles() {

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

}
add_action( 'wp_enqueue_scripts', 'evatheme_scripts_styles' );
/* -------------------------------------------------------------------
Theme check - No content width has been defined. Example:
------------------------------------------------------------------- */
if ( ! isset( $content_width ) ) {
    $content_width = 600;
}

/* -------------------------------------------------------------------
Theme check - No reference to post-thumbnails was found in the theme
------------------------------------------------------------------- */

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


/* -------------------------------------------------------------------
Disable Emojicons in v 4.2
http://wordpress.stackexchange.com/questions/185577/disable-emojicons-introduced-with-wp-4-2
------------------------------------------------------------------- */
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

/*disable emojicons in editor*/

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
} else {
    return array();
}
}

// add google analytics in the footer section
function add_this_script_footer(){ ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-556063-30']);
  _gaq.push(['_gat._forceSSL']);
  _gaq.push(['_gat._anonymizeIp']);
  _gaq.push(['_trackPageview']);

  (function () {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();

</script>

<?php }

add_action('wp_footer', 'add_this_script_footer');

// =========================================================================
// REMOVE JUNK FROM HEAD
// =========================================================================
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


/* Custom ajax loader */
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
function my_wpcf7_ajax_loader () {
    return  get_bloginfo('stylesheet_directory') . '/images/preloader.gif';
}