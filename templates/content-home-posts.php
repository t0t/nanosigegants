<div class="main__content">
    
    <section class="section-wrap">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>

    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => '',
    'posts_per_page' => '',
    'post__not_in' => array($this_post),
    'category_name' => 'noticies') ); 
    ?>
xxx
        <!-- post -->
        <article class="grid">

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
            <div class="grid__item article-post">

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="article-post__figure ">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                </a>
            </figure>

            <div class="article-post__content">

                <small class="article-post__meta-date"><?php the_date('j F Y'); ?></small>
                <h2><?php the_title(); ?></h2>
                <a class="btn" href="<?php the_permalink(); ?>">&rarr;</a>

            </div>

            <?}else {?>  

            <figure>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="" class="">
                <figcaption><?php the_title(); ?></figcaption></a>
            </figure>

            <?}?>

            <footer>
            <?php the_tags('<ul class="list--inline"><li>','</li>,<li>', '</li></ul>'); ?>
            </footer>

            </div>
            
        <?php endwhile; ?>
        

        
    <?php previous_post_link(); ?>



    <?php if(is_single()) { // single-view navigation ?>

    <?php $posts = query_posts($query_string); if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php previous_post_link(); ?> | <?php next_post_link(); ?>

    <?php endwhile; endif; ?>

    <?php } else { // archive view navigation ?>

        <?php posts_nav_link(); ?>

    <?php } ?>



        </article>

    </section>

</div>