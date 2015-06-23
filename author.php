<?php /*
Template Name: Author
*/ ?>

<?php get_header(); ?>
<div class="pt-container">
<div class="main-container">
        	<div class="container_12">
            	<div class="box-wrap2">
                <!--Header Image Begin-->
                <div id="header-container">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    <div class="tint">
    <img alt="" src="<?php echo $image[0]; ?>" />
    </div>
    <!---<div class="header-avatar"><a href="http://sekrim.com/about.php"><img src="http://sekrim.com/images/sk_square.jpg" /></a></div>-->
				<div class="headline">
					<h1 class="title"><?php the_author(); ?>'s Entries</h1>
					<h2 class="subtitle">Most Recent Post: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <br />
                    <h3 class="author">Follow <?php if ( get_the_author_meta( 'twitter' ) ) : ?>
	<a href="http://twitter.com/<?php the_author_meta('twitter' );?>">@<?php the_author_meta('twitter' );?></a>
<?php endif; ?> on Twitter!</h3>
    			</div>
            <?php else: ?>
                <div class="headline">
                        <h1 class="title" style="color:#000; text-shadow:none !important"><?php the_author(); ?>'s Entries</h1>
                        <h2 class="subtitle" style="color:#222; text-shadow:none !important">Most Recent Post: <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <br />
                        <h3 class="author">Follow <?php if ( get_the_author_meta( 'twitter' ) ) : ?>
	<a href="http://twitter.com/<?php the_author_meta('twitter' );?>">@<?php the_author_meta('twitter' );?></a> on Twitter!
<?php endif; ?></h3>
                        
                </div>
            <?php endif ?>
    			</div>
                <!--Header Image End-->
                <div id="primary" class="site-content">
				<div id="content" role="main">
                <!--Body Content Begin-->
<?php $the_query = new WP_Query( 'showposts=10' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<a href="<?php the_permalink(); ?>">
<div id="header-container-archive">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    <div class="tint">
    <img alt="" src="<?php echo $image[0]; ?>" />
    </div>
    <!---<div class="header-avatar"><a href="http://sekrim.com/about.php"><img src="http://sekrim.com/images/sk_square.jpg" /></a></div>-->
				<div class="headline-archive">
					<h1 class="title-archive"><?php the_title(); ?></h1>
					<h2 class="subtitle-archive"><?php the_subtitle(); ?></h2>
    			</div>
            <?php else: ?>
                <div class="headline-archive">
                        <h1 class="title-archive" style="color:#000; text-shadow:none !important"><?php the_title(); ?></h1>
                        <h2 class="subtitle-archive" style="color:#222; text-shadow:none !important"><?php the_subtitle(); ?></h2>
                </div>
            <?php endif ?>
    			</div>
                </a>
<?php endwhile;?>
<!--Body Content End-->
</div>
</div>
			
    </div>
    </div>
<?php get_footer(); ?>