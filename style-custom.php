<?php
    $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
    $wp_load = $absolute_path[0] . 'wp-load.php';
    require_once($wp_load);


    header("Content-type: text/css; charset: UTF-8");
    header("Cache-control: must-revalidate");  ?>
#logo2 {
background-image:url(<?php echo(stripslashes (get_option('sek_nav_logo'))) ?> );
}
html {
	background-color: <?php echo(stripslashes (get_option('sek_content_bgcolor'))) ?>;
    }
#primary{
	background-color: <?php echo(stripslashes (get_option('sek_content_bgcolor'))) ?>;
	<?php if(get_option('sek_show_shadow') == 'no') { ?> box-shadow: none; -webkit-box-shadow: none; -moz-box-shadow: none; <?php } ?>
    margin-top: <?php echo(stripslashes (get_option('sek_content_topmargin'))) ?>px !important;
}
#intro2 {
	height: <?php echo(stripslashes (get_option('sek_nav_height'))) ?>px;
    <?php if (get_option('sek_nav') == 'absolute') { ?> position: absolute; <?php }?>;
    background-color: <?php echo(stripslashes (get_option('sek_nav_bgcolor'))) ?>;
    <?php if (get_option('sek_nav_width') == 'fixed width') { ?> width:<?php echo(stripslashes (get_option('sek_width'))) ?>px; <?php } ?>;
}
.intro2-full {
	height: <?php echo(stripslashes (get_option('sek_nav_animation_height'))) ?>px !important;
}
#header-info {
	color: <?php echo(stripslashes (get_option('sek_nav_color'))) ?>;
}
.footertop {
	background:url(<?php echo(stripslashes (get_option('sek_footer_top_image'))) ?>);
    margin-top: <?php echo(stripslashes (get_option('sek_footer_margin'))) ?>px;
    height: <?php echo(stripslashes (get_option('sek_footer_top_height'))) ?>px;
}
.container_12 {
	max-width:<?php if (get_option('sek_width') != '') {echo(stripslashes (get_option('sek_width'))); } ?>px;
}
a {
	color: <?php echo(stripslashes (get_option('sek_type_link_color'))) ?>;
}
a:hover {
	color: <?php echo(stripslashes (get_option('sek_type_link_color_hover'))) ?>
}
#headertop {
	height:<?php if (get_option('sek_header_height') != '') {echo(stripslashes (get_option('sek_header_height'))); } ?>px;
	<?php if (get_option('sek_show_header') == 'no') { ?>display: none; <?php } ?>;
    background-color: <?php echo(stripslashes (get_option('sek_header_bgcolor'))); ?>;
    background-image:url('<?php echo(stripslashes (get_option('sek_header_bgimg'))); ?>');
    background-size:<?php echo(stripslashes (get_option('sek_header_bgimgsize'))); ?>;  color: <?php echo(stripslashes (get_option('sek_header_color'))); ?>;
    <?php if (get_option('sek_header_width') == 'fixed width') { ?> width:<?php echo(stripslashes (get_option('sek_width'))) ?>px; margin: 0 auto; <?php } ?>;
}
h1 {
	font-size: <?php echo(stripslashes (get_option('sek_h1_font_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_h1_font_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_h1_css'))) ?>
}
h2 {
	font-size: <?php echo(stripslashes (get_option('sek_h2_font_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_h2_font_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_h2_css'))) ?>
}
h3 {
	font-size: <?php echo(stripslashes (get_option('sek_h3_font_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_h3_font_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_h3_css'))) ?>
}
h4 {
	font-size: <?php echo(stripslashes (get_option('sek_h4_font_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_h4_font_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_h4_css'))) ?>
}
h5 {
	font-size: <?php echo(stripslashes (get_option('sek_h5_font_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_h5_font_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_h5_css'))) ?>
}
h6 {
	font-size: <?php echo(stripslashes (get_option('sek_h6_font_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_h6_font_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_h6_css'))) ?>
}
blockquote {
	font-size: <?php echo(stripslashes (get_option('sek_blockquote_size'))) ?>;
	color: <?php echo(stripslashes (get_option('sek_blockquote_color'))) ?>;
    <?php echo(stripslashes (get_option('sek_blockquote_css'))) ?>
}
body {
	background-color:<?php echo(stripslashes (get_option('sek_body_bgcolor'))) ?>
}
/*
.headline span {
    font-family: 'Satisfy', cursive;
    -moz-border-radius: 100px;
    border-radius: 100px;
	padding: 24px;
    color: white;
    text-align: center;
    display: inline-block;
}*/

#nav-center {width: <?php if (get_option('sek_width') != '') {echo(stripslashes (get_option('sek_width'))); } ?>px;}

@media all and (max-width: 959px){
	.intro2-full {
		height: 400px !important;
	}
    .hover-close-full {
    	height: 245px !important;
    }
}

