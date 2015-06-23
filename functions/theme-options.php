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

array( "name" => "Analytics/Tracking Code",
 "desc" => "You can paste your Google Analytics or other website tracking code in this box. This will be automatically added to the footer.",
 "id" => $shortname."_analytics_code",
 "type" => "textarea",
 "std" => ""),

array( "name" => "Facebook Page",
 "desc" => "Link to your Facebook page, <strong>with http://</strong>. It will be shown in the navigation bar. Leaving it blank will keep the Facebook icon suppressed.",
 "id" => $shortname."_facebookid",
 "type" => "text",
 "std" => ""),
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
array("name" => "Width",
	"desc" => "Choose width for posts and pages:",
	"id" => $shortname."_width",
	"type" => "text",
	"options" => $alt_stylesheets,
	"std" => "960",
),

array( "type" => "close"),

array( "name" => "Footer Content",
 "type" => "section"),

array( "type" => "open"),

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
