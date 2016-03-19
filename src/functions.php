<?php // ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if ( is_readable( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' ) )
  require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' );

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config-defaults.php' );

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/assets.php' );

// Required to demonstrate WP AJAX Page Loader (as WordPress doesn't ship with simple post navigation functions)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/navigation.php' );

// Only the bare minimum to get the theme up and running
function voidx_setup() {

  // Language loading
  load_theme_textdomain( 'voidx', trailingslashit( get_template_directory() ) . 'languages' );

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

  // Automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
  if ( !isset( $content_width ) || !is_int( $content_width ) )
    $content_width = (int) 960;

  // Register header and footer menus
  register_nav_menu( 'header', __( 'Header menu', 'voidx' ) );
  register_nav_menu( 'footer', __( 'Footer menu', 'voidx' ) );

}
add_action( 'after_setup_theme', 'voidx_setup', 11 );

// Sidebar declaration
function voidx_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Main sidebar', 'voidx' ),
    'id'            => 'sidebar-main',
    'description'   => __( 'Appears to the right side of most posts and pages.', 'voidx' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'voidx_widgets_init' );

add_theme_support( 'post-thumbnails' );

//the excerpt revised

function custom_excerpt_length( $length ) {
	return 30;
}

function new_excerpt_more($more) {
       global $post;
	return '... <a href="' . get_permalink($post->ID) . '" class="link--read-more">Read More</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function alter_comment_form_fields($fields){
		$comment_notes_before = '';
		$fields['author'] = '<p class="comment-form-author">' . ( $req ? '<span class="required">*</span>' : '' ) .
			'<input id="author" name="author" type="text" placeholder="Your Name*" size="30"' . $aria_req . ' /></p>';
		$fields['email'] = '<p class="comment-form-email">' . ( $req ? '<span class="required">*</span>' : '' ) .
		  '<input id="email" name="email" type="email" placeholder="Your Email*" size="30"' . $aria_req . ' /></p>';
		$fields['url'] = '<p class="comment-form-url">' . ( $req ? '<span class="required">*</span>' : '' ) .
		  '<input id="url" name="url" type="url" placeholder="Have a Website?" size="30"' . $aria_req . ' /></p>';
  return $fields;
}

add_filter('comment_form_default_fields','alter_comment_form_fields');

function my_update_comment_field($comment_field) {
	$comment_field = '<p class="comment-form-comment"><textarea id="comments" name="comment" cols="45" rows="8" aria-required="true" required="required" placeholder="Your Comment Here*" value=""></textarea></p>';
	return $comment_field;
}
add_filter('comment_form_field_comment','my_update_comment_field');

/* comments title */
