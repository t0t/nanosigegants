
<div class="section-wrap">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>


    <!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_posts_navigation(); ?>
        <?php posts_nav_link(); ?>
        <?php previous_post_link(); ?>
        <?php next_post_link(); ?>
        <?php the_date(); ?> 
        <?php the_tags(); ?>

    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>    


    <!-- Navegacion -->
    <h3>Navegació adicional</h3>

    <?php previous_post_link(); ?>
    <?php next_post_link(); ?>

</div>


    <!-- Sidebar -->
    <?php if ( is_page() ) : ?>
        <?php get_sidebar('page'); ?>
    <?php elseif ( is_404() ) : ?>
        <?php //get_sidebar( '404' ); ?>
    <?php else : ?>
        <?php //get_sidebar( 'userpicture' ); ?>
    <?php endif; ?>