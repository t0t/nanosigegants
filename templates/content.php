<div class="main__content">
    
    <section class="main__content__section">

    <!-- Flexible content -->
    <?php get_template_part('templates/custom', 'fields'); ?>

    </section>

    <?php

        if ( is_home() ) :
        get_sidebar();
        elseif ( is_404() ) :
        get_sidebar( '404' );
        else :
        get_sidebar( 'userpicture' );
        endif;
    ?>

</div>