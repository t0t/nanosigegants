<?php
/*
Template Name: Enlaces
*/
?>
<?php get_header(); ?>

<main role="main">

    <?php get_template_part('templates/custom', 'fields'); ?>

	<div id="links">
		
		<dl>
		<dt><?php _e("<!--:es-->Gegants<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(12);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>
		</dl>
		
		<dl>
		<dt><?php _e("<!--:es-->Gegants Valencians<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(14);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>

		</dl>
		
		<dl>
		<dt><?php _e("<!--:es-->Poble<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(10);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>
		</dl>
		
		<dl>
		<dt><?php _e("<!--:es-->Fotos<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(11);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>
		</dl>
		
		<dl>
		<dt><?php _e("<!--:es-->Dol&ccedil;aina i tabal<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(16);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>
		</dl>

		<dl>
		<dt><?php _e("<!--:es-->Gastronomia<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(15);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>
		</dl>
		
		<dl>
		<dt><?php _e("<!--:es-->Cultura Popular<!--:-->"); ?></dt>
		<?php 
		$bookmark = get_bookmark(13);
		echo '<a href="'.$bookmark->link_url.'"><img src="'.$bookmark->link_image.'" alt="'.$bookmark->link_name.'"></a>';
		echo '<p>'.$bookmark->link_name.'</p>';
		?>
		</dl>
		
		</div><!-- #links -->

</main>

<?php get_footer(); ?>