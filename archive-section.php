<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<?php
   $loop = new WP_Query( array(
        'post_type' => 'section',
        'posts_per_page' => 20 ));
?>
<?php /* while (have_posts()) : the_post(); */ ?>

<?php  while ( $loop->have_posts() ) : $loop->the_post();  ?>
    <style>
		<?php echo get_post_meta($post->ID, "_extracss", true); ?>
	</style>
    <script>
		<?php echo get_post_meta($post->ID, "_extrajs", true); ?>
	</script>
    <section class="section" style="width: 100%;height: auto;position: relative; background-color: <?php echo get_post_meta($post->ID, "_bgcolor", true); ?>; background-image: url('<?php echo get_post_meta($post->ID, "_bgimage", true); ?>'); background-repeat: no-repeat; background-position:center; height: <?php echo get_post_meta($post->ID, "_height", true); ?>">

		<?php the_content(); ?>

    </section>

<?php  endwhile;  ?>
<?php get_footer(); ?>
