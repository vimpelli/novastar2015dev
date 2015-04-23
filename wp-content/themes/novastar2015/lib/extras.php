<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/**
* Creates a sidebar
* @param string|array  Builds Sidebar based off of 'name' and 'id' values.
*/
$args = array(
	'name'          => __( 'Third Sidebar'),
	'description'   => '',
	'class'         => 'third-sidebar',
	'before_widget' => '<div class="header_flex_child header-left">',
	'after_widget'  => '</div>',
	'before_title'  => '',
	'after_title'   => ''
);

register_sidebar( $args );

$args = array(
    'name'          => __( 'Pre Footer'),
    'description'   => 'This is the area directly above the footer. Only displays on the home page',
    'class'         => 'pre-footer-widgets',
    'before_widget' => '<div class="light-text widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
);

register_sidebar( $args );

$args = array(
    'name'          => __( 'Email Signup'),
    'description'   => 'This widget area is only to hold email signup forms.',
    'class'         => 'email-signup',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
);

register_sidebar( $args );

$args = array(
    'name'          => __( 'Single Post Sidebar'),
    'description'   => 'This widget area is for a single post.',
    'class'         => 'single-post-sidebar',
    'before_widget' => '<div class="widget-wrapper">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
);

register_sidebar( $args );

$args = array(
    'name'          => __( 'Page Sidebar'),
    'description'   => 'This widget area is for use on a page.',
    'class'         => 'page-sidebar',
    'before_widget' => '<div class="">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
);

register_sidebar( $args );

// Wrap up function for responsive image swapping from the RICG plugin 
function imgswap($id, $size) {

	// If plugin is active, do this, if not, don't break everything to pieces
	if (function_exists('tevkori_get_srcset_string')) {
		$source = tevkori_get_srcset_string( $id, $size );
		echo $source;
	}
	
}
/* - - - - - - - - - - - - - - - - - - - - - - - - - - */
// Provides an easier way to get the uploads directory
function uploads_dir() {
	echo esc_url(home_url()) . "/wp-content/uploads/";
}



/* - - - - - - - - - - - - - - - - - - - - - - - - - - */
/*==========  Load breadcrumbs plugin  ==========*/

if ( !function_exists( 'breadcrumb_trail' ) )
require_once( 'breadcrumbs.php' );

function the_breadcrumb() {
    breadcrumb_trail();
}

/* - - - - - - - - - - - - - - - - - - - - - - - - - - */
/*==========  Register my menus  ==========*/
function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );




/* - - - - - - - - - - - - - - - - - - - - - - - - - - */
/*==========  Functions to get next and previous post urls ==========*/

function next_post_url() {
    $npl=explode('"',get_next_post_link('%link', TRUE ));

    $npl_url=$npl[1]; 

    echo $npl_url; 
}
function prev_post_url() {
    $npl=explode('"',get_previous_post_link('%link', TRUE ));

    $npl_url=$npl[1]; 

    echo $npl_url; 
}
/* - - - - - - - - - - - - - - - - - - - - - - - - - - */
/*==========  Theme Options  ==========*/

add_action('admin_menu', 'add_glo_interface');

function add_glo_interface() {
    add_options_page('Global Options', 'Global Options', '8', 'functions', 'editglobaloptions');
}

function editglobaloptions() {
    ?>
    <div class='wrap'>
    <h2>Global Custom Fields</h2>
    <form method="post" action="options.php">
    <?php wp_nonce_field('update-options') ?>

    <p><strong>Novastar Phone Number:</strong><br />
    <input type="text" name="phonenumber" size="45" value="<?php echo get_option('phonenumber'); ?>" /></p>

    <p><strong>Novastar Info Email Address</strong><br/>
    <input type="text" name="email" size="45" value="<?php echo get_option('email'); ?>"/></p>

    <p><strong>Novastar Address</strong><br/>
    <input type="text" name="address" size="45" value="<?php echo get_option('address'); ?>"/></p>

    <button type="submit" name="Submit" value="Update Options" class="btn btn-primary">Submit</button>

    <input type="hidden" name="action" value="update" />
    <input type="hidden" name="page_options" value="phonenumber,email,address" />

    </form>
    </div>
    <?php
}

function simplesearchform($classes) {
    ?>
    <form class="input-group <?php echo $classes ?>" role="search" method="get" class="search-form form-inline" action="http://novastar.dev/">
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>" required>
        <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
    </form>
    <?php
}


/*==========  GET PARENT PAGE BUTTON  ==========*/
function parentbutton() { 

    $parent = get_post_ancestors($post);

    $parent_id = $parent[0];

    $title = get_the_title($parent_id);

    $permalink = get_permalink($parent_id);

    $parentbutton = '<br><a type="button" class="btn btn-default btn-block btn-md" href="' .$permalink. '">Back to ' .$title. '</a><br>';

    echo $parentbutton;
}
/*==========  Get attachment meta  ==========*/
function wp_get_attachment( $attachment_id ) {

    $attachment = get_post( $attachment_id );
    return array(
        'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
        'caption' => $attachment->post_excerpt,
        'description' => $attachment->post_content,
        'href' => get_permalink( $attachment->ID ),
        'src' => $attachment->guid,
        'title' => $attachment->post_title
    );
}