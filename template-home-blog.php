<?php
/*
Template Name: Blog
*/
?>
<?php get_header(); ?>


<!-- Page Header -->
<?php get_template_part('templates/page', 'header'); ?>

<!-- Loop for posts -->
<?php get_template_part('templates/content', 'home-posts'); ?>


<?php get_footer(); ?>