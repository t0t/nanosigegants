
<div class="section-wrap">

    <!-- Page Header -->
    <?php get_template_part('templates/page', 'header'); ?>




    <section class="grid">

    <?php 
    $this_post = $post->ID;
    $loop = new WP_Query( array( 
    'post_type' => '',
    'posts_per_page' => '',
    'post__not_in' => array($this_post),
    'category_name' => 'noticies') ); 
    ?>

    <!-- Custom Loop -->
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
        
        </section>
        <!-- /grid -->


    <!-- Navegacion -->
    <h3>Navegació adicional</h3>

    <?php previous_post_link(); ?>
    <?php next_post_link(); ?>

</div>


    <!-- Sidebar -->
    <?php if ( is_page_template() ) : ?>
        <?php get_sidebar('page-posts'); ?>
    <?php elseif ( is_404() ) : ?>
        <?php //get_sidebar( '404' ); ?>
    <?php else : ?>
        <?php //get_sidebar( 'userpicture' ); ?>
    <?php endif; ?>
