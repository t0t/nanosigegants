<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>

<main>

	<!-- Content page -->
	<?php //get_template_part('templates/content', 'page'); ?>
	
	<!-- Loop for posts -->
	<?php get_template_part('templates/content', 'page-posts'); ?>


</main>

<?php get_footer(); ?>