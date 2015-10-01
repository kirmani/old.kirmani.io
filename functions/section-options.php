<?php

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Sections', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Section', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Section', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Section:', 'text_domain' ),
		'all_items'           => __( 'All Sections', 'text_domain' ),
		'view_item'           => __( 'View Section', 'text_domain' ),
		'add_new_item'        => __( 'Add New Section', 'text_domain' ),
		'add_new'             => __( 'New Section', 'text_domain' ),
		'edit_item'           => __( 'Edit Section', 'text_domain' ),
		'update_item'         => __( 'Update Seciton', 'text_domain' ),
		'search_items'        => __( 'Search sections', 'text_domain' ),
		'not_found'           => __( 'No sections found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No sections found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'section', 'text_domain' ),
		'description'         => __( 'Create Content Block Sections', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 16,
		'menu_icon'           => '',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'register_meta_box_cb' => 'add_events_metaboxes',
	);
	register_post_type( 'section', $args );

}

register_post_type('section', array(
	//...
	'rewrite' => array('slug' => '/')
	//...
));

// Add the Events Meta Boxes

function add_events_metaboxes() {
	add_meta_box('wpt_events_location', 'Event Location', 'wpt_events_location', 'section', 'normal', 'default');
}

// The Event Location Metabox

function wpt_events_location() {
	global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	// Get the location data if its already been entered
		$bgimage = get_post_meta($post->ID, '_bgimage', true);
		$bgcolor = get_post_meta($post->ID, '_bgcolor', true);
		$headlinecolor = get_post_meta($post->ID, '_headlinecolor', true);
		$headlinesize = get_post_meta($post->ID, '_headlinesize', true);
		$topmargin = get_post_meta($post->ID, '_topmargin', true);
		$height = get_post_meta($post->ID, '_height', true);
		$fgimage = get_post_meta($post->ID, '_fgimage', true);
		$fgheight = get_post_meta($post->ID, '_fgheight', true);
		$extracss = get_post_meta($post->ID, '_extracss', true);
		$extrajs = get_post_meta($post->ID, '_extrajs', true);

	// Echo out the field
		echo '<table class="form-table"><tbody>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_image"><strong>Background Image</strong><span style=" display:block; color: #999; margin:5px 0 0 0; line-height: 18px;">Choose a background image for this section.</span></label></th><td><input type="text" name="_bgimage" id="_bgimage" value="' . $bgimage . '" size="30" style="width:75%; margin-right: 20px; float:left;"><input style="float: left;" type="button" class="button" name="nzs_section_bg_image_button" id="nzs_section_bg_image_button" value="Browse"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Background color</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75px; margin-left: 5px;" class="tz-color" name="_bgcolor" id="_bgcolor" type="text" value="' . $bgcolor .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Section Height</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a height for the section</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75px; margin-left: 5px;" class="tz-color" name="_height" id="_height" type="text" value="' . $height .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_image"><strong>Foreground Image</strong><span style=" display:block; color: #999; margin:5px 0 0 0; line-height: 18px;">Choose a forgrounf image for this section.</span></label></th><td><input type="text" name="_fgimage" id="_fgimage" value="' . $fgimage . '" size="30" style="width:75%; margin-right: 20px; float:left;"><input style="float: left;" type="button" class="button" name="nzs_section_bg_image_button" id="nzs_section_bg_image_button" value="Browse"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Foreground Height</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a foreground height to overlay over the background image.</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75px; margin-left: 5px;" class="tz-color" name="_fgheight" id="_fgheight" type="text" value="' . $fgheight .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Headline Color</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom headline color using the color picker, or enter a hex value (i.e #fff).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75px; margin-left: 5px;" class="tz-color" name="_headlinecolor" id="_headlinecolor" type="text" value="' . $headlinecolor .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Headline Font Size</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a headline font size (i.e 48px).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75px; margin-left: 5px;" class="tz-color" name="_headlinesize" id="_headlinesize" type="text" value="' . $headlinesize .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Top Margin</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set the distance from the bottom of the last post to the top of this margin (i.e 182px).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75px; margin-left: 5px;" class="tz-color" name="_topmargin" id="_topmargin" type="text" value="' . $topmargin .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Extra CSS</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set the distance from the bottom of the last post to the top of this margin (i.e 182px).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; height:100px; margin-left: 5px;" class="tz-color" name="_extracss" id="_extracss" type="text" value="'.$extracss.'">'.$extracss.'</textarea></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Extra JavaScript</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set the distance from the bottom of the last post to the top of this margin (i.e 182px).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; height:100px; margin-left: 5px;" class="tz-color" name="_extrajs" id="_extrajs" type="text" value="'.$extrajs.'">'.$extrajs.'</textarea></td></tr>';
		echo '</tbody></table>';
}

// Save the Metabox Data

function wpt_save_events_meta($post_id, $post) {

	// verify this came from the our screen and with proper authorization,
	// because save_post can be triggered at other times
	if ( !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
	return $post->ID;
	}

	// Is the user allowed to edit the post or page?
	if ( !current_user_can( 'edit_post', $post->ID ))
		return $post->ID;

	// OK, we're authenticated: we need to find and save the data
	// We'll put it into an array to make it easier to loop though.

	$events_meta['_bgimage'] = $_POST['_bgimage'];
	$events_meta['_bgcolor'] = $_POST['_bgcolor'];
	$events_meta['_headlinecolor'] = $_POST['_headlinecolor'];
	$events_meta['_headlinesize'] = $_POST['_headlinesize'];
	$events_meta['_topmargin'] = $_POST['_topmargin'];
	$events_meta['_height'] = $_POST['_height'];
	$events_meta['_fgimage'] = $_POST['_fgimage'];
	$events_meta['_fgheight'] = $_POST['_fgheight'];
	$events_meta['_extracss'] = $_POST['_extracss'];
	$events_meta['_extrajs'] = $_POST['_extrajs'];


	// Add values of $events_meta as custom fields

	foreach ($events_meta as $key => $value) { // Cycle through the $events_meta array!
		if( $post->post_type == 'revision' ) return; // Don't store custom data twice
		$value = implode(',', (array)$value); // If $value is an array, make it a CSV (unlikely)
		if(get_post_meta($post->ID, $key, FALSE)) { // If the custom field already has a value
			update_post_meta($post->ID, $key, $value);
		} else { // If the custom field doesn't have a value
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key); // Delete if blank
	}

}

add_action('save_post', 'wpt_save_events_meta', 1, 2); // save the custom fields

?>
