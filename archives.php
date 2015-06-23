<?php /*
Template Name: Archive
*/ ?>
<?php
$totalNumberOfPostsToDisplay = $wpdb->get_var("SELECT COUNT(ID) FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish'");
$postsID = 0;

function createRow($postsPerRow)
{
	global $postsID;
	global $totalNumberOfPostsToDisplay;
	if ($postsPerRow == 1) {
		echo "<div class='row'>";
			echo "<div class='archiveItem' style='width:100%;height:320px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                    <div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    					</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
		echo "</div>";
		$totalNumberOfPostsToDisplay--;
	}
	else if ($postsPerRow == 2) {
		echo "<div class='row'>";
			echo "<div class='archiveItem' style='width:34%;height:320px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
			echo "<div class='archiveItem' style='width:66%;height:320px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
		echo "</div>";
		$totalNumberOfPostsToDisplay -= 2;
	}
	else if ($postsPerRow == 3) {
		echo "<div class='row'>";
			echo "<div class='archiveItem' style='width:66%;height:320px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
			echo "<div class='innerRow'>";
				echo "<div class='archiveItem' style='width:100%%;height:160px;display:block;'>";
					$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 style="font-size:24px" class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                    <div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
				$postsID++;
				echo "</div>";
				echo "<div class='archiveItem' style='width:100%;height:160px;display:block;'>";
					$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 style="font-size:24px" class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 style="font-size:24px" class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
				$postsID++;
				echo "</div>";
			echo "</div>";
		echo "</div>";
		$totalNumberOfPostsToDisplay -= 3;
	}
	else if ($postsPerRow == 4) {
		echo "<div class='row'>";
			echo "<div class='archiveItem' style='width:25%;height:200px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 class="title-archive" style="font-size:21px"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
			echo "<div class='archiveItem' style='width:25%;height:200px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
			echo "<div class='archiveItem' style='width:25%;height:200px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
			echo "<div class='archiveItem' style='width:25%;height:200px;'>";
				$args = array( 'posts_per_page' => 1, 'offset'=> $postsID);
				$the_query = new WP_Query($args);
				while ($the_query -> have_posts()) : $the_query -> the_post();
					?>
                    <a href="<?php the_permalink(); ?>">
					<div id="header-container-archive">
            		<?php if (has_post_thumbnail( $post->ID ) ): ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'single-post-thumbnail' ); ?>
    				<div class="tint">
    				<img alt="" src="<?php echo $image[0]; ?>" />
    				</div>
					<div class="headline-archive">
					<h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

    				</div>
            		<?php else: ?>
                	<div class="tint">
                    <?php $class = rand(1,20); ?>
    				<div style="width: 100%; height: 100%;" class="color<?php echo $class ?>"> </div>
    				</div>
                	<div class="headline-archive">
                    <h2 style="font-size:21px" class="title-archive"><?php the_title(); ?></h2>

                	</div>
            		<?php endif ?>
    				</div>
                	</a>
					<?php
				endwhile;
			$postsID++;
			echo "</div>";
		echo "</div>";
		$totalNumberOfPostsToDisplay -= 4;
	}
}
?>

<?php get_header(); ?>

<style type="text/css">
.tint img {
	width:100%;
	height: 100%;
}
</style>
<div class="pt-container">
<div class="main-container">
        	<div class="container_12" style="max-width:1000px;margin-bottom:100px">
            	<div class="box-wrap2">
                <!--Header Image Begin-->
                <div id="header-container">
                    <div class="headline">
                            <h1 class="title" style="color:#000; text-shadow:none !important; text-align:center;">Archive</h1>
                    </div>
    			</div>
                <!--Header Image End-->
                <div id="primary" class="site-content">
				<div id="archive-content" class="blog" role="main">
                <!--Body Content Begin-->
				<?php
				while ($totalNumberOfPostsToDisplay > 4) {
					createRow(rand(1, 4));
				}
				if ($totalNumberOfPostsToDisplay == 4) {
					createRow(4);
				}
				else if ($totalNumberOfPostsToDisplay == 3) {
					createRow(3);
				}
				else if ($totalNumberOfPostsToDisplay == 2) {
					createRow(2);
				}
				else if ($totalNumberOfPostsToDisplay == 1) {
					createRow(1);
				} else {
					echo "An Error Occured";
				}
				?>
				<!--Body Content End-->
</div>
</div>

    </div>
    </div>
<?php get_footer(); ?>
