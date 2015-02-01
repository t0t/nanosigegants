
<div class="widget widget--posts">

	<h3>noticies recents</h3>
	<ul>
	<?php
	    $recentPosts = new WP_Query();
	    $recentPosts->query('showposts=5');
	?>
	<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
	    <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); // reset the query ?>
	</ul>

</div>





<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>
	<?php dynamic_sidebar( 'sidebar-custom' ); ?>
<?php endif; ?>