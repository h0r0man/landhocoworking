<?php
/**
 * Template Name: Contatti
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-sections/content', 'contact'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
