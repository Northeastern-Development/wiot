<?php

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/

require_once(get_template_directory()."/functions/admin.php");
require_once(get_template_directory()."/functions/customposts.php");
require_once(get_template_directory()."/functions/theme.php");
require_once(get_template_directory()."/functions/menus.php");
require_once(get_template_directory()."/functions/media.php");
require_once(get_template_directory()."/functions/globalscripts.php");
require_once(get_template_directory()."/functions/conditionalscripts.php");
require_once(get_template_directory()."/functions/globalstyles.php");
require_once(get_template_directory()."/functions/conditionalstyles.php");
require_once(get_template_directory()."/functions/sidebar.php");
require_once(get_template_directory()."/functions/excerpts.php");
require_once(get_template_directory()."/functions/comments.php");
require_once(get_template_directory()."/functions/shortcodes.php");
require_once(get_template_directory()."/functions/posts.php");






// we need to prevent access to an array of certain pages such as search from the admin side of things






/*------------------------------------*\
	Functions
\*------------------------------------*/



// Custom Gravatar in Settings > Discussion
function northeasterngravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}






// block WP enum scans
// http://m0n.co/enum
if (!is_admin()){
	// default URL format
	if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) die();
	add_filter('redirect_canonical', 'shapeSpace_check_enum', 10, 2);
}
function shapeSpace_check_enum($redirect, $request){
	// permalink URL format
	if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) die();
	else return $redirect;
}



/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('wp_enqueue_scripts', 'nudev_include_custom_jquery');
add_action('init', 'register_northeastern_menu'); // Add neudev Menu
add_action('init', 'northeastern_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'northeastern_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'northeastern_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'northeastern_conditional_styles'); // Add Conditional PAge Stylesheet(s)
add_action('init', 'register_northeastern_menu'); // Add northeastern Blank Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'northeasternwp_pagination'); // Add our northeastern Pagination
add_action('admin_footer','posts_status_color');  // colorize post types


// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'northeasterngravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'northeastern_blank_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'northeastern_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 ); // Removes scripts version number from script tags
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 ); // Removes scripts version number from style tags
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter( 'login_headerurl', 'my_login_logo_url' );
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether



?>
