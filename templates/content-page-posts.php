
<div class="main__content">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>




    <section class="grid">

    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => '',
    'posts_per_page' => '6',
    'post__not_in' => array($this_post),
    'category_name' => 'noticies') ); 
    ?>

    <!-- Custom Loop -->
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
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
        <?php wp_reset_postdata(); // reset the query ?>
    </section>
    <!-- /grid -->


    <!-- Navegacion -->
    <?php //previous_post_link(); ?>
    <?php //next_post_link(); ?>

</div>
