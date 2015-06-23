<?php
// Theme Options
// by Specky Geek (http://www.speckygeek.com)
$checked = "checked=\"checked\"";

$themename = "Kirmani.io Manager";
$shortname = "sek";
$version = "1.0";

// Create theme options
global $options;
$options = array (

array( "name" => "Header Content",
 "type" => "section"),

array( "type" => "open"),

array("name" => "Show Header",
	"desc" => "Do you want to show the header?",
	"id" => $shortname."_show_header",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Header Width",
	"desc" => "Choose width type for header",
	"id" => $shortname."_header_width",
	"type" => "select",
	"options" => array("full width","fixed width"),
	"std" => "full width",
),
array("name" => "Header Height",
	"desc" => "Choose height for header (ex. 150)",
	"id" => $shortname."_header_height",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "150",
),
array("name" => "Header Font Color",
	"desc" => "Choose a background color for header (ex. #fff)",
	"id" => $shortname."_header_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#fff",
),
array("name" => "Header Background Image",
	"desc" => "Choose a background image URL for header (ex. http://example.com/image.jpg)",
	"id" => $shortname."_header_bgimg",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Header Background Image Size",
	"desc" => "Choose a background image size",
	"id" => $shortname."_header_bgimgsize",
	"type" => "select",
	"options" => array("cover","contain","100%"),
	"std" => "100%",
),
array("name" => "Header Background Color",
	"desc" => "Choose a background color for header (ex. #333)",
	"id" => $shortname."_header_bgcolor",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#000",
),
array( "name" => "Analytics/Tracking Code",
 "desc" => "You can paste your Google Analytics or other website tracking code in this box. This will be automatically added to the footer.",
 "id" => $shortname."_analytics_code",
 "type" => "textarea",
 "std" => ""),

array( "name" => "Twitter ID",
 "desc" => "Your Twitter user name, please. It will be shown in the navigation bar. Leaving it blank will keep the Twitter icon supressed.",
 "id" => $shortname."_twitterid",
 "type" => "text",
 "std" => ""),

array( "name" => "Facebook Page",
 "desc" => "Link to your Facebook page, <strong>with http://</strong>. It will be shown in the navigation bar. Leaving it blank will keep the Facebook icon suppressed.",
 "id" => $shortname."_facebookid",
 "type" => "text",
 "std" => ""),
array( "type" => "close"),

array( "name" => "Navigation Bar Options",
 "type" => "section"),

array( "type" => "open"),
array("name" => "Show Navigation Bar",
	"desc" => "Do you want to show the navigation bar?",
	"id" => $shortname."_show_nav",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Bar Type",
	"desc" => "Choose your navigation bar:",
	"id" => $shortname."_nav",
	"type" => "select",
	"options" => array("absolute","sticky"),
	"std" => "sticky",
),
array("name" => "Navigation Bar Width",
	"desc" => "Choose your navigation bar width:",
	"id" => $shortname."_nav_width",
	"type" => "select",
	"options" => array("full width","fixed width"),
	"std" => "full width",
),
array("name" => "Navigation Bar Height",
	"desc" => "Input navigation bar height (ex. 60)",
	"id" => $shortname."_nav_height",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "60",
),
array("name" => "Navigation Bar Font Color",
	"desc" => "Input navigation bar font color (ex. #fff)",
	"id" => $shortname."_nav_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#fff",
),
array("name" => "Navigation Bar Background Color",
	"desc" => "Input navigation bar background color (ex. #333)",
	"id" => $shortname."_nav_bgcolor",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#333",
),
array("name" => "Use Most Recent Post as Navbar Image",
	"desc" => "Use the featured image of the most recent blog post as a background image. This only works if you use the featured image!",
	"id" => $shortname."_nav_post",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "no",
),
array("name" => "Navigation Logo Image",
	"desc" => "Insert a URL for Logo Image",
	"id" => $shortname."_nav_logo",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Navigation Logo Link",
	"desc" => "Insert a URL for Logo Image to link to on click",
	"id" => $shortname."_nav_logo_link",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Navigation Left Text",
	"desc" => "Insert Left Side Text",
	"id" => $shortname."_nav_lefttext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "Title",
),
array("name" => "Navigation Right Text",
	"desc" => "Insert Right Side Text",
	"id" => $shortname."_nav_righttext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Show Navigation Bar Animation",
	"desc" => "Do you want to show the navigation bar slide animation?",
	"id" => $shortname."_nav_animation",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "no",
),
array("name" => "Navigation Bar Animation Height",
	"desc" => "Input navigation bar height after animation (ex. 250) (Minimum size is 250)",
	"id" => $shortname."_nav_animation_height",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "250",
),
array("name" => "Show Navigation Bar Job",
	"desc" => "Do you want to show the navigation bar job?",
	"id" => $shortname."_nav_job",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Job Text",
	"desc" => "Insert Job Text",
	"id" => $shortname."_nav_jobtext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "Ocupation at Company",
),
array("name" => "Show Navigation Bar Education",
	"desc" => "Do you want to show the navigation bar education?",
	"id" => $shortname."_nav_education",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Education Text",
	"desc" => "Insert Education Text",
	"id" => $shortname."_nav_educationtext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "Major at University",
),
array("name" => "Show Navigation Bar Location",
	"desc" => "Do you want to show the navigation bar location?",
	"id" => $shortname."_nav_location",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Location Text",
	"desc" => "Insert Location Text",
	"id" => $shortname."_nav_locationtext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "Lives in City, State",
),
array("name" => "Show Navigation Bar Phone",
	"desc" => "Do you want to show the navigation bar phone?",
	"id" => $shortname."_nav_phone",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Phone Text",
	"desc" => "Insert Phone Text",
	"id" => $shortname."_nav_phonetext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "(123) 456-7890",
),
array("name" => "Show Navigation Bar Email",
	"desc" => "Do you want to show the navigation bar email?",
	"id" => $shortname."_nav_email",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Email Text",
	"desc" => "Insert Email Text",
	"id" => $shortname."_nav_emailtext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "hello@example.com",
),
array("name" => "Show Navigation Close Tooltip",
	"desc" => "Do you want to show the navigation bar closing tooltip location?",
	"id" => $shortname."_nav_close",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Navigation Close Tooltip Text",
	"desc" => "Insert Navigation Close Tooltip Text",
	"id" => $shortname."_nav_closetext",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "Press any key or hover here to close...",
),

array( "type" => "close"),

array( "name" => "Typography",
 "type" => "section"),

array( "type" => "open"),

array("name" => "H1 Font Size",
	"desc" => "Insert Font size for H1 tags (ex. 60px, 54pt, 12em)",
	"id" => $shortname."_h1_font_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "60px",
),
array("name" => "H1 Font Color",
	"desc" => "Insert Font Color for H1 tags (ex. #0f0f0f)",
	"id" => $shortname."_h1_font_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#000000",
),
array("name" => "H1 Additional CSS",
	"desc" => "Insert H1 Additional CSS",
	"id" => $shortname."_h1_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "H2 Font Size",
	"desc" => "Insert Font size for H2 tags (ex. 60px, 54pt, 12em)",
	"id" => $shortname."_h2_font_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "28px",
),
array("name" => "H2 Font Color",
	"desc" => "Insert Font Color for H2 tags (ex. #bbb)",
	"id" => $shortname."_h2_font_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#bbb",
),
array("name" => "H2 Additional CSS",
	"desc" => "Insert H2 Additional CSS",
	"id" => $shortname."_h2_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "H3 Font Size",
	"desc" => "Insert Font size for H3 tags (ex. 60px, 54pt, 12em)",
	"id" => $shortname."_h3_font_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "20px",
),
array("name" => "H3 Font Color",
	"desc" => "Insert Font Color for H3 tags (ex. #333",
	"id" => $shortname."_h3_font_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#333",
),
array("name" => "H3 Additional CSS",
	"desc" => "Insert H3 Additional CSS",
	"id" => $shortname."_h3_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "H4 Font Size",
	"desc" => "Insert Font size for H4 tags (ex. 60px, 54pt, 12em)",
	"id" => $shortname."_h4_font_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "18px",
),
array("name" => "H4 Font Color",
	"desc" => "Insert Font Color for H4 tags (ex. #333)",
	"id" => $shortname."_h4_font_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#333",
),
array("name" => "H4 Additional CSS",
	"desc" => "Insert H4 Additional CSS",
	"id" => $shortname."_h4_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "H5 Font Size",
	"desc" => "Insert Font size for H5 tags (ex. 16px)",
	"id" => $shortname."_h5_font_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "16px",
),
array("name" => "H5 Font Color",
	"desc" => "Insert Font Color for H5 tags (ex. #333)",
	"id" => $shortname."_h5_font_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#333",
),
array("name" => "H5 Additional CSS",
	"desc" => "Insert H5 Additional CSS",
	"id" => $shortname."_h5_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "H6 Font Size",
	"desc" => "Insert Font size for H6 tags (ex. 15px)",
	"id" => $shortname."_h6_font_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "15px",
),
array("name" => "H6 Font Color",
	"desc" => "Insert Font Color for H6 tags (ex. #333)",
	"id" => $shortname."_h6_font_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#333",
),
array("name" => "H6 Additional CSS",
	"desc" => "Insert H6 Additional CSS",
	"id" => $shortname."_h6_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Blockquote Font Size",
	"desc" => "Insert Font size for blockquote tags (ex. 15px)",
	"id" => $shortname."_blockquote_size",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "15px",
),
array("name" => "Blockquote Font Color",
	"desc" => "Insert Font Color for blockquote tags (ex. #333)",
	"id" => $shortname."_blockquote_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#333",
),
array("name" => "Blockquote Additional CSS",
	"desc" => "Insert Blockquote Additional CSS",
	"id" => $shortname."_blockquote_css",
	"type" => "textarea",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Link Color",
	"desc" => "Insert Link Color (ex. #d73c2c)",
	"id" => $shortname."_type_link_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#d73c2c",
),
array("name" => "Link Hover Color",
	"desc" => "Insert Link Color (ex. #ccc)",
	"id" => $shortname."_type_link_color_hover",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#ccc",
),

array( "type" => "close"),

array( "name" => "Main Content",
 "type" => "section"),

array( "type" => "open"),

array("name" => "Body Background Color",
	"desc" => "Choose a background color for header (ex. #fafafa)",
	"id" => $shortname."_body_bgcolor",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#fafafa",
),
array("name" => "Content Top Margin",
	"desc" => "Input top margin between nav and content (ex. 550)",
	"id" => $shortname."_content_topmargin",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "50",
),
array("name" => "Content Background Color",
	"desc" => "Choose a background color for header (ex. #fff)",
	"id" => $shortname."_content_bgcolor",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#fff",
),
array("name" => "Show Content Shadow",
	"desc" => "Do you want to show the content shadow?",
	"id" => $shortname."_show_shadow",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),

array("name" => "Width",
	"desc" => "Choose width for posts and pages:",
	"id" => $shortname."_width",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "960",
),

array( "name" => "Footer Text",
 "desc" => "Paste your text, copyright statements, etc., here.",
 "id" => $shortname."_footer_text",
 "type" => "textarea",
 "std" => "Footer Placeholder Text"),

array( "type" => "close"),

array( "name" => "Footer Content",
 "type" => "section"),

array( "type" => "open"),

array("name" => "Show Footer",
	"desc" => "Show the footer?",
	"id" => $shortname."_footer",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "yes",
),
array("name" => "Show Footer Top",
	"desc" => "Show the footer top?",
	"id" => $shortname."_footer_top",
	"type" => "select",
	"options" => array("yes","no"),
	"std" => "no",
),
array("name" => "Show Footer Height",
	"desc" => "Input the footer top image height",
	"id" => $shortname."_footer_top_height",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "128",
),
array("name" => "Footer Top Image",
	"desc" => "Input URL for an image above the footer",
	"id" => $shortname."_footer_top_image",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "",
),
array("name" => "Footer Margin",
	"desc" => "Input margin between the content and the footer (ex. 50)",
	"id" => $shortname."_footer_margin",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "50",
),
array("name" => "Footer Background Color",
	"desc" => "Choose a footer font color (ex. #1c1c1c)",
	"id" => $shortname."_footer_bgcolor",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#1c1c1c",
),
array("name" => "Footer Title",
	"desc" => "Enter footer title",
	"id" => $shortname."_footer_title",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "Footer",
),
array("name" => "Footer Font Color",
	"desc" => "Choose a footer font color (ex. #fff)",
	"id" => $shortname."_footer_color",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "#fff",
),
array( "name" => "Footer Body",
	"desc" => "Enter text for footer body here. (It's HTML friendly!)",
	"id" => $shortname."_footer_body",
	"std" => "Footer Placeholder Text",
	"type" => "textarea"
),
array( "name" => "Footer Logo Image",
	"desc" => "Enter image URL for the Footer Logo. (Work's best if it's square!)",
	"id" => $shortname."_footer_logo",
	"std" => "",
	"type" => "text"
),
array( "name" => "Footer Logo Link",
	"desc" => "Enter link for footer logo to send to on click.",
	"id" => $shortname."_footer_link",
	"std" => "",
	"type" => "text"
),
array( "name" => "Footer Logo Tooltip Text",
	"desc" => "Enter text for footer logo tooltip.",
	"id" => $shortname."_footer_tooltip",
	"std" => "",
	"type" => "text"
),

array( "name" => "Adsense Code",
 "desc" => "Enter your Adsense code (or other ad network code) here.",
 "id" => $shortname."_adcode",
 "std" => "",
 "type" => "textarea"),

array( "type" => "close"),

);

function p2h_add_admin() {

 global $themename, $shortname, $options;

 if ( isset ( $_GET['page'] ) && ( $_GET['page'] == basename(__FILE__) ) ) {

 if ( isset ($_REQUEST['action']) && ( 'save' == $_REQUEST['action'] ) ){

 foreach ( $options as $value ) {
 if ( array_key_exists('id', $value) ) {
 if ( isset( $_REQUEST[ $value['id'] ] ) ) {
 update_option( $value['id'], $_REQUEST[ $value['id'] ]  );
 }
 else {
 delete_option( $value['id'] );
 }
 }
 }
 header("Location: admin.php?page=".basename(__FILE__)."&saved=true");
 }
 else if ( isset ($_REQUEST['action']) && ( 'reset' == $_REQUEST['action'] ) ) {
 foreach ($options as $value) {
 if ( array_key_exists('id', $value) ) {
 delete_option( $value['id'] );
 }
 }
 header("Location: admin.php?page=".basename(__FILE__)."&reset=true");
 }
 }

add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'p2h_admin');
add_submenu_page(basename(__FILE__), $themename . ' Options', 'Theme Options', 'administrator',  basename(__FILE__),'p2h_admin'); // Default
}

function p2h_admin() {

    global $themename, $shortname, $version, $options;
	$i=0;

	if ( isset ($_REQUEST['saved']) && ($_REQUEST['saved'] ) )echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
	if ( isset ($_REQUEST['reset']) && ($_REQUEST['reset'] ) ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';

?>

<div class="wrap ">
<div class="options_wrap">
<h2 class="settings-title"><?php echo $themename; ?> Settings</h2>
<form method="post">

<?php foreach ($options as $value) {
switch ( $value['type'] ) {
case "section":
?>
	<div class="section_wrap">
	<h3 class="section_title"><?php echo $value['name']; ?></h3>
 	<div class="section_body">

<?php
break;
case 'text':
?>

	<div class="options_input options_text">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id'])  ); } else { echo $value['std']; } ?>" />
	</div>

<?php
break;
case 'textarea':
?>
	<div class="options_input options_textarea">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_option( $value['id'] ) != "") { echo stripslashes(get_option( $value['id']) ); } else { echo $value['std']; } ?></textarea>
	</div>

<?php
break;
case 'select':
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
		<?php foreach ($value['options'] as $option) { ?>
				<option <?php if (get_option( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
		</select>
	</div>

<?php
break;
case "radio":
?>
	<div class="options_input options_select">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<span class="labels"><label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label></span>
		  <?php foreach ($value['options'] as $key=>$option) {
			$radio_setting = get_option($value['id']);
			if($radio_setting != ''){
				if ($key == get_option($value['id']) ) {
					$checked = "checked=\"checked\"";
					} else {
						$checked = "";
					}
			}else{
				if($key == $value['std']){
					$checked = "checked=\"checked\"";
				}else{
					$checked = "";
				}
			}?>
			<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
			<?php } ?>
	</div>

<?php
break;
case "checkbox":
?>
	<div class="options_input options_checkbox">
		<div class="options_desc"><?php echo $value['desc']; ?></div>
		<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
		<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	 </div>

<?php
break;
case "close":
$i++;
?>
<span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save Changes" /></span>
</div><!--#section_body-->
</div><!--#section_wrap-->

<?php break;
}
}
?>

<input type="hidden" name="action" value="save" />
<span class="submit">
<input name="save" type="submit" value="Save All Changes" />
</span>
</form>

<form method="post">
<span class="submit">
<input name="reset" type="submit" value="Reset All Options" />
<input type="hidden" name="action" value="reset" />
</span>
</form>
<br/>
</div><!--#options-wrap-->

</div> <!--#wrap-->
<?php
}
add_action('admin_init', 'p2h_add_init');
add_action('admin_menu' , 'p2h_add_admin');
?>
<?php
function p2h_add_init() {

$file_dir=get_template_directory_uri();
wp_enqueue_style("p2hCss", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("p2hScript", $file_dir."/functions/rm_script.js", false, "1.0");

}

?>
