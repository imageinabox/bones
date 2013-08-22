<?php
function theme_options_register_slider() {
	$labels = array(  
		'name' => _x('Slider', 'post type general name'),  
		'singular_name' => _x('Slide', 'post type singular name'),  
		'add_new' => _x('Add New', 'project'),  
		'add_new_item' => __('Add New Slide'),  
		'edit_item' => __('Edit Slide'),  
		'new_item' => __('New Slide'),  
		'view_item' => __('View Slide'),  
		'search_items' => __('Search Slide'),  
		'not_found' =>  __('No slide found'),  
		'not_found_in_trash' => __('No slide found in Trash'),
		'parent_item_colon' => '',
		'menu_name' => __('Slider')
	);
	$args = array(  
		'labels' => $labels,
		'public' => false,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'show_in_admin_bar' => true,
		'exclude_from_search' => true,
		'query_var' => true,
		'rewrite' => false,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','page-attributes')
	);
  // The following is the main step where we register the post.  
  register_post_type('slider',$args);	
}
add_action( 'init' , 'theme_options_register_slider' );
function codex_slider_updated_messages( $messages ) {
  global $post, $post_ID;

  $messages['slider'] = array(
    0 => '', // Unused. Messages start at index 1.
    1 => __('Slide updated.'),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Slide updated.'),
    /* translators: %s: date and time of the revision */
    5 => isset($_GET['revision']) ? sprintf( __('Slide restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => __('Slide published.'),
    7 => __('Slide saved.'),
    8 => __('Slide submitted.'),
    /*
    9 => sprintf( __('Book scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview book</a>'),
      // translators: Publish box date format, see http://php.net/date
      date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Book draft updated. <a target="_blank" href="%s">Preview book</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    */
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'codex_slider_updated_messages' );

function iiab_add_custom_box() {
    add_meta_box( 
        'iiab_url_location',
        __( 'Slider Link', 'iiab' ),
        'iiab_inner_custom_box',
        'slider',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'iiab_add_custom_box' );

function iiab_inner_custom_box( $post ) {
	$url_location_meta_value = get_post_meta( $post->ID , 'iiab_url_location' , true );
	wp_nonce_field( plugin_basename( __FILE__ ), 'iiab_noncename' );
	echo '<p>Slider URL Location for the Homepage Slider</p>';
	echo '<p><label for="iiab_url_location_field">' . __( 'URL String:' , 'iiab' ) . '</label><br /><input autocomplete="off" style="width:100%;" type="text" id="iiab_url_location_field" name="iiab_url_location_field" value="'. ( !empty( $url_location_meta_value ) ? esc_html( $url_location_meta_value ) : '' ) . '" /></p>';
	echo '<hr />';
	echo 'Example: ' . site_url( '/blog/' );
	echo '<p><small>Provided by <a href="http://www.imageinabox.com/">Image In A Box</a></small></p>';
}
function iiab_save_postdata( $post_id ) {
	if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
		return;
	if( !isset( $_POST['iiab_noncename'] ) || empty( $_POST['iiab_noncename'] ) )
		return;
	if( !wp_verify_nonce( $_POST['iiab_noncename'] , plugin_basename( __FILE__ ) ) )
		return;
	if( 'slider' == $_POST['post_type'] ) {
		if( !current_user_can( 'edit_page', $post_id ) )
			return;
	}
	$iiab_url_location = ( !empty( $_POST['iiab_url_location_field'] ) ? $_POST['iiab_url_location_field'] : '' );
	
	update_post_meta( $post_id , 'iiab_url_location' , $iiab_url_location );
}
add_action( 'save_post', 'iiab_save_postdata' );
add_image_size( 'iiab-slider-size' , 960 , 350 , true );

function my_edit_slider_columns( $columns ) {
	unset( $columns['date'] );
	$columns['menu_order'] = __( 'Slide Order' );
	$columns['date'] = __( 'Date' );
	return $columns;
}
add_filter( "manage_slider_posts_columns", "my_edit_slider_columns" );

function custom_columns( $column, $post_id ) {
	$post = get_post( $post_id );
	switch( $column ) {
		case 'menu_order':
			echo $post->menu_order;
			break;
	}
}
add_action( 'manage_posts_custom_column' , 'custom_columns' , 10 , 2 );

function iiab_add_slider_content() {
	if( is_home() || is_front_page() ) {
		$args = array( 'post_type' => 'slider', 'posts_per_page' => -1 , 'order' => 'ASC' , 'orderby' => 'menu_order' );
		$sliderLoop = new WP_Query( $args );
		if( $sliderLoop->have_posts() ) :
			echo '<div id="slider-content" class="wrap clearfix">';
				echo '<div class="slides_container">';
				while( $sliderLoop->have_posts() ) : $sliderLoop->the_post();
					echo '<div class="slide">'; the_content(); echo '</div>';
				endwhile;
				echo '</div>';
			echo '</div>';
		endif;
		wp_reset_query();
		wp_reset_postdata();
	}
}
?>