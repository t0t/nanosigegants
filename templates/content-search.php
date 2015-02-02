
<div class="section-wrap">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>
	
	
	<section class="grid">

    <!-- Loop -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


        <?php the_date('j F Y'); ?>
        <?php the_tags(); ?>
		
		<div class="post">

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="post__figure ">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                </a>
            </figure>

            <div class="post__content">

                <small class="post__meta-date"><?php the_date('j F Y'); ?></small>
                <h2><?php the_title(); ?></h2>
                <a class="btn" href="<?php the_permalink(); ?>">&rarr;</a>

            </div>

            <?}else {?>  

            <figure><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class=""><figcaption><?php the_title(); ?></figcaption></a></figure>

            <?}?>

            </div>


    <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>    
	
	</section>

    <!-- Navegacion -->
    <nav class="nav--posts"> 

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


             <!-- <li>

                <a href="/blog/">
                <i class="icon-house"></i> -->
                <?php //$post_type = get_post_type_object( get_post_type($post) ); echo $post_type->label; ?>
                <!-- </a>

            </li> -->


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
