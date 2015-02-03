<?php //if(!is_front_page()) { ?>

<? //} ?>


	<?php if ( is_page() | is_single() ) : ?>

    <header>
    <h1><?php the_title(); ?></h1>
    </header>
        
    <?php elseif ( is_search() ) : ?>
        
    <h1>"<?php the_search_query() ?>"</h1>
    <?php //echo esc_html( get_search_query( false ) ); ?>


    <?php elseif ( is_404() ) : ?>
        
    <h1>Pagina no encontrada!</h1>


    <?php else : ?>
    <p>ups, no titulo!</p>   
    <?php endif; ?>