
<h3>Sidebar Single</h3>


Sidebar singleeeeeee



	<?php if ( is_active_sidebar( 'sidebar-custom' ) ) : ?>

		<!-- #start primary-sidebar -->
	    <div class="sidebar__widgets">

			<?php dynamic_sidebar( 'sidebar-custom' ); ?>

		</div>
		<!-- #end primary-sidebar -->

	<?php endif; ?>