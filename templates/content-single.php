
<div class="section-wrap">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>


    <!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <?php the_date('j F Y'); ?>
        <?php the_tags(); ?>


    <!-- Cargame los Custom fields, ACF -->
    <?php get_template_part('templates/custom-fields'); ?>

    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>    


    <!-- Navegacion -->
    <h3>Navegació</h3>

    <nav class="post--nav"> 

        <ul>
            <li>

            <?php 
                
                $prevPost = get_previous_post();
                
                if($prevPost) 
            {
                $prevthumbnail = get_the_post_thumbnail($prevPost->ID, 'mini', array('class' => 'img--rounded') );
                previous_post_link('%link', "$prevthumbnail &larr; %title"); 
            } 
            ?>
            </li>

             <li>
                <a href="/blog/">
                <i class="icon-house"></i>
                <?php //$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?>
                </a>
            </li>

            <li>
            
            <?php

                $nextPost = get_next_post();

                if($nextPost) 
            {
                $nextthumbnail = get_the_post_thumbnail($nextPost->ID, 'mini', array('class' => 'img--circle'));  
                next_post_link('%link', "%title &rarr; $nextthumbnail"); 
            }
            ?>
            </li>
        </ul>
    </nav>

</div>
