<?php
/*
Template Name: Portada
*/
?>
<?php get_header(); ?>

<main>


	<!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?> 


    <!-- Content a pelo -->
	<?php //get_template_part( 'templates/content' ); ?>


</main>


<!-- Sidebar -->
    <?php if ( is_page() ) : ?>
        <?php get_sidebar(); ?>
    <?php elseif ( is_404() ) : ?>
        <?php //get_sidebar( '404' ); ?>
    <?php else : ?>
        <?php //get_sidebar( 'userpicture' ); ?>
    <?php endif; ?>


<?php get_footer(); ?>

