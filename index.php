<?php get_header(); ?>
    <style>
    #primary {
        <?php echo get_post_meta($post->ID, "_post_css", true); ?>
    }
    .container_12 {
        max-width:<?php echo get_post_meta($post->ID, "_page_width", true); ?> !important;
    }
    .headline span {
       line-height: <?php echo get_post_meta($post->ID, "_headlinesize", true); ?>;
    }
    .title {
        <?php echo get_post_meta($post->ID, "_title_css", true); ?>
    }
    .subtitle {
        <?php echo get_post_meta($post->ID, "_subtitle_css", true); ?>
    }
    body {
        <?php echo get_post_meta($post->ID, "_background_css", true); ?>
    }
    q, blockquote {
        color: <?php echo get_post_meta($post->ID, "_quote_color", true); ?> !important;
        background-color: <?php echo get_post_meta($post->ID, "_quote_bgcolor", true); ?> !important;
        <?php echo get_post_meta($post->ID, "_quote_css", true); ?>
    }
    <?php if (get_post_meta($post->ID, "_background", true) == 'fixed') { ?>
    <?php }?>;
    <?php if (get_post_meta($post->ID, "_background", true) == 'absolute') { ?>
    #fixedTint {
        display:none;
    }
    <?php }?>
    </style>
    <?php if (get_post_meta($post->ID, "_background", true) == 'absolute') { ?>
<script>
$(window).scroll(function(e) {
    $("#header-container .tint img").css("margin-top", $(window).scrollTop() * 0.5 + "px");
});
</script>
    <?php } ?>
<script>
$( window ).resize(function() {
    $('.tint img').each(function() {
        //get img dimensions
        var w = $(this).width();
        //get div dimensions
        var div_w =$('.tint').width();
        //set img position
        this.style.left = '50%';
        this.style.marginLeft = Math.round((div_w-w)/2) + 'px';
    });
});
$( document ).ready(function() {
    $('.tint').find('img').each(function(){
        var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
        $(this).addClass(imgClass);
    })
});
</script>
        <div class="main-container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post current">
                    <?php if (has_post_thumbnail( $post->ID ) ): ?>
                        <script type='text/javascript' src='<?php echo THEME_PATH; ?>/js/index.js'></script>
                        <div id="header-container" class="withImage inner">
<?php
$currentHasImage = true;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
                            <div class="tint">
                                <img alt="" src="<?php echo $image[0]; ?>" />
                            </div>
                            <div id="headerNav">
<?php
$previous_post = get_previous_post();
if (!empty( $previous_post )): ?>
                                    <div class="previous"><span class="arrow"></span><?php previous_post('/< %', '', 'yes'); ?></div>
<?php endif;
$next_post = get_next_post();
if (!empty( $next_post )): ?>
                                    <div class="next"><span class="arrow"></span><?php next_post('/< %', '', 'yes'); ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="container_12">
                            <div class="headline inner-title headline-top">
                                <h1 class="title"><?php if (get_post_meta($post->ID, '_alt_title', true) == '') { the_title(); } else { echo get_post_meta($post->ID, '_alt_title', true); }?></h1>
                                <div class="subtitle"><?php echo get_post_meta($post->ID, '_subtitle', true); ?></div>
                                <?php if (!is_page()) { ?><h3 class="author"><?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> <?php echo the_author_meta( 'first_name' , $post->author ); ?> <?php echo the_author_meta( 'last_name' , $post->author); ?>
                                <?php if ( get_the_author_meta( 'twitter' ) ) : ?>
                                    <a href="http://twitter.com/<?php the_author_meta('twitter' );?>">@<?php the_author_meta('twitter' );?></a>
                                    <?php endif; ?> · <?php the_date(); ?> · <?php echo_views(get_the_ID()); ?> views<?php if (get_post_meta($post->ID, "_github", true) != '') {?> · Code on <a href="<?php echo get_post_meta($post->ID, "_github", true); ?>">Github</a><?php } ?> · <span id="ttr"></span> read</h3><?php } ?>
                            </div>
                            </div>
                                <div class="story-cover-arrow"></div>
                        </div>
                    <?php else: ?>
                        <div id="header-container" class="inner">
                                <div class="container_12">
                            <div class="headline inner-title">

                                <h1 class="title" style="color:#000; text-shadow:none !important"><?php if (get_post_meta($post->ID, '_alt_title', true) == '') { the_title(); } else { echo get_post_meta($post->ID, '_alt_title', true); }?></h1>
                                <div class="subtitle" style="color:#222; text-shadow:none !important"><?php echo get_post_meta($post->ID, '_subtitle', true); ?></div>
                                <br />
                                <?php if (!is_page()) { ?><h3 class="author noImage" style="text-shadow:none !important;color: rgba(0,0,0,0.65)"><?php echo get_avatar( get_the_author_meta( 'ID' ), 30 ); ?> <?php echo the_author_meta( 'first_name' , $post->author ); ?> <?php echo the_author_meta( 'last_name' , $post->author); ?> <?php if ( get_the_author_meta( 'twitter' ) ) : ?>
        <a href="http://twitter.com/<?php the_author_meta('twitter' );?>">@<?php the_author_meta('twitter' );?></a>
        <?php endif; ?> · <?php the_date(); ?> · <?php echo_views(get_the_ID()); ?> views<?php if (get_post_meta($post->ID, "_github", true) != '') {?> · Code on <a href="<?php echo get_post_meta($post->ID, "_github", true); ?>">Github</a><?php } ?> · <span id="ttr"></span> read</h3><?php } ?>
                            </div>
                            </div>
                        </div>
                    <?php endif ?>
    <script>
    var str = "<?php echo do_shortcode('[est_time]'); ?>";
    if (str[str.length - 1] == 's') {
        str = str.substring(0, str.length - 1);
    }
    document.getElementById('ttr').innerHTML = str;
    </script>

                                <div class="container_12">
<div class="box-wrap2">
                        <div id="primary" class="site-content">
                                <?php if (is_single()) { ?>
                                <div class="story-navigation">
                                    <div class="column grid_6 previous">
                                        <?php previous_post('<strong>Previous Story</strong>%', '', 'yes'); ?>
                                    </div>
                                    <div class="column grid_6 next">
                                        <?php next_post('<strong>Next Story</strong>%', '', 'yes'); ?>
                                    </div>
                                </div>

                                <?php } ?>
                            <div id="content" class="blog"  role="main">
                                <?php the_content(); ?>
                            </div><!-- #content -->
                            <div class="post-links blog">
                                <a href="<?php echo get_permalink(); ?>#disqus_thread">Comments</a>
                                <a href="<?php echo get_permalink(); ?>">Permalink</a>
                                <?php if ( is_user_logged_in() ) { ?>
                                <a href="http://sekrim.com/wp-admin/post-new.php">New Post</a>
                                <?php edit_post_link('Edit', '', ''); ?>
                                <a href="<?php echo get_delete_post_link( $id ); ?>" title="delete-post">Delete</a>
                                <a href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a>
                                <?php } ?>
                            </div>
                            <?php if (!is_page()) { ?>
                                <div class="archive"><a alt="archive" href="http://sekrim.com/archive/"><img src="<?php echo THEME_PATH; ?>/images/archive.png" width="48" height="48"></a></div>
<?php if (is_single()) { $withcomments = "1" ; comments_template(); } else { ?>
<?php } $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; } ?>

                        </div><!-- #primary -->
                    </div><!-- .box-wrap2 -->
                </div><!-- .container_12 -->
            </div><!-- .post.current -->
            <!--Start Footer-->
<script>
    $(function() {
        $('.withImage .headline-top').each(function(i) {
            var headlineHeight = $(this).height();
            $(this).css('bottom', headlineHeight + window.innerHeight * 0.1 + "px");
        });
        $(window).scroll(function(e) {
            $('.withImage .headline-top').each(function(i) {
                var headlineHeight = $(this).height();
                $(this).css("bottom",  (headlineHeight + window.innerHeight * 0.1) - ($(window).scrollTop() - $(this).parent().parent().offset().top) / $(this).parent().parent().height() * window.innerHeight * 0.1  + "px");
                $(this).css("opacity", 1 - ($(window).scrollTop() - $(this).parent().parent().offset().top) / $(this).parent().parent().height());
            });
        });

        $(window).scroll(function(e) {
            var topOfNav = window.innerHeight/2 - 125;
            var bottomOfNav = window.innerHeight/2 + 125;
            var shouldHideNav = false;
            $('.withImage').each(function(i) {
                var topOfHeader = $(this).offset().top;
                var bottomOfHeader = topOfHeader + $(this).height();
                var distanceFromHeaderToTopOfWindow = topOfHeader - $(window).scrollTop();
                var distanceFromHeaderToBottomOfWindow = bottomOfHeader - $(window).scrollTop();
                if ((bottomOfNav > distanceFromHeaderToTopOfWindow && bottomOfNav < distanceFromHeaderToBottomOfWindow) || (topOfNav < distanceFromHeaderToBottomOfWindow && topOfNav > distanceFromHeaderToTopOfWindow)) {
                    shouldHideNav = true;
                }
            });
            if (shouldHideNav) {
                $(".story-navigation .previous").css("margin-left",-125);
                $(".story-navigation .next").css("margin-right",-125);
            } else {
                $(".story-navigation .previous").css("margin-left",0);
                $(".story-navigation .next").css("margin-right",0);
            }
        });
    });
</script>


            <div class="post next-post content-hidden">
<script>
$( document ).ready(function() {
    $("#footer-container").each(function(){
        var url = $(this).children('.previous-link').attr('href');
        $(this).css('cursor', 'pointer');
        $(this).click(function(){
            window.location = url;
        });
    });
});
</script>
<?php if (is_single()) {
$previous  = get_adjacent_post( false, '', true );
if($previous) :
    $first_post = get_posts('posts_per_page=1&post_status=publish');
if($first_post) :
    if (has_post_thumbnail( $previous->ID ) ):
        $previousHasImage = true;?>
                                <a href="<?php echo get_permalink($previous->ID); ?>" class="previous-link">
                                    <div id="footer-container" class="withImage inner">
                                        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ),'single-post-thumbnail' ); ?>
                                        <div class="tint">
                                        <img alt="" src="<?php echo $image[0]; ?>" />
                                    </div>
                                </a>
                                <div class="headline inner-title" style="top:110px !important">
                                <hr style="border-top:1px solid #dededc">
                                <h3 class="author"><strong>NEXT IN YOUR READING LIST</strong></h3><br />
                                <h1 class="title"><?php echo $previous->post_title ?></h1>
                                <div class="subtitle"><?php get_the_subtitle($previous) ?></div>
                                <?php $author_id=$previous->post_author; ?>
            <h3 class="author"><?php echo get_avatar( get_the_author_meta('ID'), 30 ); ?> <?php echo the_author_meta( 'first_name' , $author_id ); ?> <?php echo the_author_meta( 'last_name' , $author_id ); ?> <?php if ( get_the_author_meta( 'twitter' ) ) : ?>
    <a href="http://twitter.com/<?php the_author_meta('twitter', $author_id);?>">@<?php the_author_meta('twitter', $author_id);?></a> · <?php echo date('M d, Y', strtotime($previous->post_date)); ?>  · <?php echo_views($previous->ID); ?> views<?php if (get_post_meta($previous->ID, "_github", true) != '') {?> · Code on <a href="<?php echo get_post_meta($previous->ID, "_github", true); ?>">Github</a><?php } ?></h3>
<?php endif; ?>
    </div>
    <?php endif; ?>
  <?php endif; ?>
  </div>
<?php endif; } ?>
<?php if(!$currentHasImage && $previousHasImage) { ?>
<script>
/* $(window).scroll(function(e) {
    var body = document.body,
        html = document.documentElement;
    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    if($(window).scrollTop() > height - window.innerHeight - (500-window.innerHeight)-window.innerHeight*0.5 -125) {
        $(".story-navigation .previous").css("margin-left",-125);
        $(".story-navigation .next").css("margin-right",-125);
    } else {
        $(".story-navigation .previous").css("margin-left",0);
        $(".story-navigation .next").css("margin-right",0);
    }
}); */
</script>
<?php } else if ($currentHasImage && $previousHasImage) {?>
<script>
/* $(window).scroll(function(e) {
    var body = document.body,
        html = document.documentElement;
    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    if($(window).scrollTop() < window.innerHeight/2+125 ||  $(window).scrollTop() > height - window.innerHeight - (500-window.innerHeight)-window.innerHeight*0.5 -125) {
        $(".story-navigation .previous").css("margin-left",-125);
        $(".story-navigation .next").css("margin-right",-125);
    } else {
        $(".story-navigation .previous").css("margin-left",0);
        $(".story-navigation .next").css("margin-right",0);
    }
}); */
</script>
<?php } else if ($currentHasImage && !$previousHasImage) { ?>
<script>
/* $(window).scroll(function(e) {
    var body = document.body,
        html = document.documentElement;
    var height = Math.max( body.scrollHeight, body.offsetHeight,
        html.clientHeight, html.scrollHeight, html.offsetHeight );
    if($(window).scrollTop() < window.innerHeight/2+125) {
        $(".story-navigation .previous").css("margin-left",-125);
        $(".story-navigation .next").css("margin-right",-125);
    } else {
        $(".story-navigation .previous").css("margin-left",0);
        $(".story-navigation .next").css("margin-right",0);
    }
}); */
</script>
<?php } ?>
<!--End Footer-->
<!--
<div class="container_12">
    <div class="box-wrap2">
        <div id="primary" class="site-content">
            <div id="content" class="blog"  role="main" style="margin-top:0px !important">
            </div>
        </div>
    </div>
</div>
</div>
-->
<div class="navigation">
<div class="alignleft"><?php previous_posts_link( '&laquo; Previous Entries' ); ?></div>
<div class="alignright"><?php next_posts_link( 'Next Entries &raquo;', '' ); ?></div>
</div>
<?php endwhile; endif; ?><!--End Loop-->
</div>
</div>
<script>
(function($) {
    var INFINITE_SCROLL_BUFFER = 40;
    $('.main-container').infinitescroll({
        navSelector: '.navigation .alignright a',
        nextSelector: '.navigation .alignright a',
        itemSelector: '.post.current',
        loadingImg: 'images/ajax-loader.gif',
        loadingText: 'Loading next post...',
        animate: false,
        extraScrollPx: 150,
        donetext: 'I think we\'ve hit the end, Jim',
        bufferPx: INFINITE_SCROLL_BUFFER,
    }, function(arrayOfNewElems) {
        $('.tint').find('img').each(function(){
            var imgClass = (this.width/this.height > 1) ? 'wide' : 'tall';
            $(this).addClass(imgClass);
            var w = $(this).width();
            var div_w =$('.tint').width();
            this.style.left = '50%';
            this.style.marginLeft = Math.round((div_w-w)/2) + 'px';
        });
    });
    $('#menu-navbar li').each(function() {
        var menu_item_link_text = $(this).find('a:first').text().toLowerCase();
        console.log(menu_item_link_text);
        if (menu_item_link_text.indexOf("feed") >= 0) {
            console.log("found feed");
            $(this).addClass('feed');
        }
    });
})(jQuery);
</script>
<style>
#infscr-loading {
    text-align: center;
}
#infscr-loading img {
    margin: 0 auto;
    display: inherit !important;
}
</style>
<?php  get_footer();  ?>
