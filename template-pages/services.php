<?php
/**
 * Template Name: Servizi
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-sections/content', 'services'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>
