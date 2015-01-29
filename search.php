<?php get_header(); ?>

	<section>

		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header>
				<h1><?php get_search_query(); ?></h1>
			</header>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part('templates/content', 'search'); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			ups no hay resultados
		<?php endif; ?>

		</main>
	</section>

<?php get_footer(); ?>