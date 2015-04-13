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

// Provides an easier way to get the uploads directory
function uploads_dir() {
	echo esc_url(home_url()) . "/wp-content/uploads/";
}

// Create function to render breadcrumbs
function the_breadcrumb() {
    global $post;
    echo '<ol class="breadcrumb">';
    if (!is_home()) {
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category('</li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a> /</li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong>'.get_the_title().'</strong></li>';
            }
        }
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
    echo '</ol>';
}

function register_my_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

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

//Custom Theme Settings
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
    <form class="input-group <?php echo $classes ?>">
        <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="search-field form-control" placeholder="<?php _e('Search', 'roots'); ?> <?php bloginfo('name'); ?>" required>
        <button type="submit" class="search-submit btn btn-default"><i class="fa fa-search"></i></button>
    </form>
    <?php
}

function parentbutton() { /*==========  GET PARENT PAGE BUTTON  ==========*/

    /* get id of current page */
    $pageid = get_the_id();

    /* get id of parent page */
    $parent = get_post_ancestors( $post->ID );

    $id = ($parent) ? $parent[count($parent)-1]: $post->ID;

    /* set variable for link to parent page */
    $permalink = get_permalink($id);

    /* set variable for title of parent page */
    $title = get_the_title($id);

    /* if the two id variables are not equal, display button to parent page */
    if ($id != $pageid) {

        $parentbutton = '<br><a type="button" class="btn btn-default btn-block btn-md" href="' .$permalink. '">Back to ' .$title. '</a>';

    } 

    echo $parentbutton;
}