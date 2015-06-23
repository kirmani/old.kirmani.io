<?php
    $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
    $wp_load = $absolute_path[0] . 'wp-load.php';
    require_once($wp_load);


    header("Content-type: text/css; charset: UTF-8");
    header("Cache-control: must-revalidate");  ?>
html {
	background-color: <?php echo(stripslashes (get_option('sek_content_bgcolor'))) ?>;
    }
#primary{
	background-color: <?php echo(stripslashes (get_option('sek_content_bgcolor'))) ?>;
    margin-top: <?php echo(stripslashes (get_option('sek_content_topmargin'))) ?>px !important;
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

