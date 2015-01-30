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

        <!-- post -->
        <article class="grid">

        <?php while ($loop->have_posts()) : $loop->the_post(); ?>
        
            <div class="grid__item article-post">

            <? if ( has_post_thumbnail() ) { ?>

            <figure class="article-post__figure ">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php the_post_thumbnail('medium'); ?>
                <figcaption><?php the_date(); ?></figcaption></a>
            </figure>

            <div class="article-post__content">

                    <p class="article-post--slider__meta-date"><?php the_date('l, j F Y'); ?></p>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
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

        </article>

    </section>

</div>