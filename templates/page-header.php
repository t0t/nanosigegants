<?php //if(!is_front_page()) { ?>

<? //} ?>


	<?php if ( is_page() | is_single() ) : ?>

    <header>
    <h2><?php the_title(); ?></h2>
    </header>
        
    <?php elseif ( is_search() ) : ?>
        
    <h2>informació amb la paraula: "<span class="h1"><?php the_search_query() ?></span>"</h2>

    <?php elseif ( is_404() ) : ?>
        
    <h2>ups!</h2>


    <?php else : ?>
    <p>ups, no titulo!</p>   
    <?php endif; ?>