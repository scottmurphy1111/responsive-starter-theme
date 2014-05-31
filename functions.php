<?php

//load jquery & modernizer

function loadup_scripts()
    {
    
        wp_enqueue_script( 'respondjs', get_template_directory_uri() . '/js/respond.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'scriptjs', get_template_directory_uri() . '/js/script.js', array( 'jquery' ) );
    }
    
    add_action( 'wp_enqueue_scripts', 'loadup_scripts' );

// Sidebars

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'before_widget' => '<section class="">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

// Add Custom Menus

add_theme_support( 'menus' );
register_nav_menu('topnav', 'Top navigation menu');


// Add Custom Excerpt Lengths

function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return '...<a href="'. get_permalink().'">Read More ></a>';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

// Add Post Thumbnails

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true );
add_image_size( 'category-thumb', 300, 9999, true );

//Clean your header
remove_action('wp_head', 'rsd_link'); // kill the RSD link
remove_action('wp_head', 'wlwmanifest_link'); // kill the WLW link
remove_action('wp_head', 'index_rel_link'); // kill the index link 
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // kill the prev link 
remove_action('wp_head', 'start_post_rel_link', 10, 0); // kill the start link 
remove_action('wp_head', 'feed_links', 2); // kill post and comment feeds 
remove_action('wp_head', 'feed_links_extra', 3); // kill category, author, and other extra feeds 
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // kill adjacent post links 
remove_action('wp_head', 'wp_generator'); // kill the wordpress version number // Add Custom Post Thumbnails & Taxonomies

// Add Custom Post Thumbnails & Taxonomies
/*

register_post_type('custom', array(
	'label' => __('Custom Post Type'),
	'singular_label' => __('Custom Post Type'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'supports' => array('title', 'editor', 'author'),
));
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'taxo', 'custom', array( 'hierarchical' => true, 'label' => 'Custom Taxonomy', 'query_var' => true, 'rewrite' => true ) ); 
}
*/

// Add Custom Meta Boxes



/**
 * Adds a box to the main column on the Post and Page edit screens.
 */


// function myplugin_add_custom_box() {

//     $screens = array( 'post', 'page' );

//     foreach ( $screens as $screen ) {

//         add_meta_box(
//             'myplugin_sectionid',
//             __( 'My Post Section Title', 'myplugin_textdomain' ),
//             'myplugin_inner_custom_box',
//             $screen
//         );
//     }
// }
// add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );

// /**
//  * Prints the box content.
//  * 
//  * @param WP_Post $post The object for the current post/page.
//  */
// function myplugin_inner_custom_box( $post ) {

//   // Add an nonce field so we can check for it later.
//   wp_nonce_field( 'myplugin_inner_custom_box', 'myplugin_inner_custom_box_nonce' );

//   /*
//    * Use get_post_meta() to retrieve an existing value
//    * from the database and use the value for the form.
//    */
//   $value = get_post_meta( $post->ID, '_my_meta_value_key', true );

//   echo '<label for="myplugin_new_field">';
//        _e( "Description for this field", 'myplugin_textdomain' );
//   echo '</label> ';
//   echo '<input type="text" id="myplugin_new_field" name="myplugin_new_field" value="' . esc_attr( $value ) . '" size="25" />';

// }

// /**
//  * When the post is saved, saves our custom data.
//  *
//  * @param int $post_id The ID of the post being saved.
//  */
// function myplugin_save_postdata( $post_id ) {

//   /*
//    * We need to verify this came from the our screen and with proper authorization,
//    * because save_post can be triggered at other times.
//    */

//   // Check if our nonce is set.
//   if ( ! isset( $_POST['myplugin_inner_custom_box_nonce'] ) )
//     return $post_id;

//   $nonce = $_POST['myplugin_inner_custom_box_nonce'];

//   // Verify that the nonce is valid.
//   if ( ! wp_verify_nonce( $nonce, 'myplugin_inner_custom_box' ) )
//       return $post_id;

//   // If this is an autosave, our form has not been submitted, so we don't want to do anything.
//   if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
//       return $post_id;

//   // Check the user's permissions.
//   if ( 'page' == $_POST['post_type'] ) {

//     if ( ! current_user_can( 'edit_page', $post_id ) )
//         return $post_id;
  
//   } else {

//     if ( ! current_user_can( 'edit_post', $post_id ) )
//         return $post_id;
//   }

//   /* OK, its safe for us to save the data now. */

//   // Sanitize user input.
//   $mydata = sanitize_text_field( $_POST['myplugin_new_field'] );

//   // Update the meta field in the database.
//   update_post_meta( $post_id, '_my_meta_value_key', $mydata );
// }
// add_action( 'save_post', 'myplugin_save_postdata' );

?>