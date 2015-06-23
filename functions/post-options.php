<?php

/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function myplugin_add_custom_box() {

    $screens = array( 'post', 'page' );

    foreach ( $screens as $screen ) {

        add_meta_box(
            'myplugin_sectionid',
            __( 'Post Options', 'myplugin_textdomain' ),
            'myplugin_inner_custom_box',
            $screen
        );
    }
}
add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function myplugin_inner_custom_box() {

	global $post;

	// Noncename needed to verify where the data originated
	echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	// Get the location data if its already been entered
		$background = get_post_meta($post->ID, '_background', true);
		$pageWidth = get_post_meta($post->ID, '_page_width', true);
		$githubURL = get_post_meta($post->ID, '_github', true);
		$titleCSS = get_post_meta($post->ID, '_title_css', true);
		$subtitleCSS = get_post_meta($post->ID, '_subtitle_css', true);
		$postCSS = get_post_meta($post->ID, '_post_css', true);
		$backgroundCSS = get_post_meta($post->ID, '_background_css', true);
		$quoteColor = get_post_meta($post->ID, '_quote_color', true);
		$quoteBGColor = get_post_meta($post->ID, '_quote_bgcolor', true);
		$quoteCSS = get_post_meta($post->ID, '_quote_css', true);
		$googleFonts = get_post_meta($post->ID, '_google_fonts', true);
        $extraJS = get_post_meta($post->ID, '_extra_js', true);

	// Echo out the field
		echo '<table class="form-table"><tbody>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_image"><strong>Background</strong><span style=" display:block; color: #999; margin:5px 0 0 0; line-height: 18px;">Choose a background image for this section.</span></label></th><td><input type="radio" name="_background" id="_background" value="absolute" ';
		if ($background=="absolute"){echo "checked=\"checked\" ";}
		echo ' >Absolute<br><input type="radio" name="_background" id="_background" value="fixed" ';
		if ($background=="fixed"){echo "checked=\"checked\" ";}
		echo ' ">Fixed</td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Page Width</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ddd).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75%; margin-left: 5px;" class="tz-color" name="_page_width" id="_page_width" type="text" value="' . $pageWidth .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Github URL</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ddd).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75%; margin-left: 5px;" class="tz-color" name="_github" id="_github" type="text" value="' . $githubURL .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Title CSS</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px" class="tz-color" name="_title_css" id="_title_css" type="text" value="' . $titleCSS .'">'. $titleCSS .'</textarea></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Subtitle CSS</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px;" class="tz-color" name="_subtitle_css" id="_subtitle_css" type="text" value="' . $subtitleCSS .'">' . $subtitleCSS .'</textarea></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Post CSS</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px;" class="tz-color" name="_post_css" id="_post_css" type="text" value="' . $postCSS .'">' . $postCSS .'</textarea></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Background CSS</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px;" class="tz-color" name="_background_css" id="_background_css" type="text" value="' . $backgroundCSS .'">' . $backgroundCSS .'</textarea></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Quote Color</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ddd).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75%; margin-left: 5px;" class="tz-color" name="_quote_color" id="_title_text_shadow" type="text" value="' . $quoteColor .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Quote Background Color</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #fa4b2a).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><input style="width:75%; margin-left: 5px;" class="tz-color" name="_quote_bgcolor" id="_title_text_shadow" type="text" value="' . $quoteBGColor .'"></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Quote CSS</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px;" class="tz-color" name="_quote_css" id="_quote_css" type="text" value="' . $quoteCSS .'">' . $quoteCSS .'</textarea></td></tr>';
		echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Google Fonts Javascript</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px;" class="tz-color" name="_google_fonts" id="_google_fonts" type="text" value="' . $googleFonts .'">' . $googleFonts .'</textarea></td></tr>';
    	echo '<tr><th style="width:25%"><label for="nzs_section_bg_color"><strong>Extra Javascript</strong><span style=" display:block; color:#999; margin:5px 0 0 0; line-height: 18px;">You can set a custom background color using the color picker, or enter a hex value (i.e #ff0000).</span></label></th><td><div id="nzs_section_bg_color_picker" class="colorSelector"><div></div></div><textarea style="width:75%; margin-left: 5px;height:100px;" class="tz-color" name="_extra_js" id="_extra_js" type="text" value="' . $extraJS .'">' . $extraJS .'</textarea></td></tr>';

        echo '</tbody></table>';
}

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function myplugin_save_postdata( $post_id, $post ) {

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

	$events_meta['_background'] = $_POST['_background'];
	$events_meta['_page_width'] = $_POST['_page_width'];
	$events_meta['_github'] = $_POST['_github'];
	$events_meta['_title_css'] = $_POST['_title_css'];
	$events_meta['_subtitle_css'] = $_POST['_subtitle_css'];
	$events_meta['_post_css'] = $_POST['_post_css'];
	$events_meta['_background_css'] = $_POST['_background_css'];
	$events_meta['_quote_color'] = $_POST['_quote_color'];
	$events_meta['_quote_bgcolor'] = $_POST['_quote_bgcolor'];
	$events_meta['_quote_css'] = $_POST['_quote_css'];
	$events_meta['_google_fonts'] = $_POST['_google_fonts'];
	$events_meta['_extra_js'] = $_POST['_extra_js'];

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

add_action( 'save_post', 'myplugin_save_postdata', 1, 2 );

?>
