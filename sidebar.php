<?php 
/**
 * Sidebar
 */
?>


<div class="col-sm-4">

	<div class="sidebar">

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

			<div id="secondary" class="widget-area" role="complementary">

				<?php dynamic_sidebar( 'sidebar-1' ); ?>

			</div><!-- #secondary .widget-area -->

		<?php endif; ?>

	</div><!-- .sidebar -->

</div><!-- .col-md-4 .sidebar -->