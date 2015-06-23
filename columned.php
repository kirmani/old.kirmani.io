<?php

/*

Template Name: Columned Page with Linked Title

*/

?>



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


<div class="pt-container">

<div class="main-container">

        	<div class="container_12" style="margin-bottom: 100px;">

            	<div class="box-wrap2">



			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div id="header-container">

            <?php if (has_post_thumbnail( $post->ID ) ): ?>

	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>

    <div class="tint">

    <img alt="" src="<?php echo $image[0]; ?>" />

    </div>

    <!---<div class="header-avatar"><a href="http://sekrim.com/about.php"><img src="http://sekrim.com/images/sk_square.jpg" /></a></div>-->

				<div class="headline">

					<h1 class="title"><?php the_title(); ?></h1>

					<div class="subtitle"><?php the_subtitle(); ?></div>

    			</div>

            <?php else: ?>

                <div class="headline">

                        <h1 class="title" style="color:#000; text-shadow:none !important"><a href="http://kirmani.io"><?php the_title(); ?></a></h1>

                        <div class="subtitle" style="color:#222; text-shadow:none !important"><?php the_subtitle(); ?></div>

                </div>

            <?php endif ?>

    			</div>

                <div id="primary" class="site-content">

				<div id="content" role="main">

    			<?php the_content(); ?>

                <?php $editURL = get_edit_post_link(); ?>

                <script>

				var editURL = "<?php echo $editURL; ?>";

				editURL = editURL.replace("&amp;","&");

                </script>

                <?php if ( is_user_logged_in() ) { ?>

                <div id="admin-bar">

                    <div id="new-post" class="post-options"><p><a href="http://sekrim.com/wp-admin/post-new.php">New Post</a></p></div>

                    <div id="edit" class="post-options"><?php edit_post_link('Edit', '<p>', '</p>'); ?></div>

                    <div id="edit" class="post-options"><p><a href="<?php echo get_delete_post_link( $id ); ?>" title="delete-post">Delete</a></p></div>

                    <div id="logout" class="post-options"><p><a href="<?php echo wp_logout_url(); ?>" title="Logout">Logout</a></p></div>

                </div>

                <?php } ?>

			<?php endwhile; endif; ?>

		</div><!-- #content -->

	</div><!-- #primary -->

    </div>

    </div>

<?php get_footer(); ?>
