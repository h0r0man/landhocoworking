<?php
/**
 * Template Name: Location
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-sections/content', 'location'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
