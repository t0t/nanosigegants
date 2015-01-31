<aside class="sidebar">

<h3>Sidebar Single</h3>

<?php $args = array(
	'depth'       => 0,
	'sort_column' => 'menu_order, post_title',
	'menu_class'  => 'menu',
	'include'     => '212,18,16,286',
	'exclude'     => '',
	'echo'        => true,
	'show_home'   => false,
	'link_before' => '',
	'link_after'  => '' );
?>
<?php wp_page_menu( $args ); ?> 

	<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>
		<!-- #start primary-sidebar -->
	    <div class="sidebar__widgets">
			<?php dynamic_sidebar( 'sidebar-custom' ); ?>
		</div>
		<!-- #end primary-sidebar -->
	<?php endif; ?>
	
</aside>