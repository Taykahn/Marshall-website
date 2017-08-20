<?php 
/**
 * Frontpage
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>


<section id="homepage">

	<div class="container-fluid no-pad">

		<div class="row section-1">

			<div class="col-md-4">

				<div class="front-page-column-one">

					<?php if( get_field('col-1-img') ): ?>

						<img src="<?php the_field( 'col-1-img' ); ?>" />

					<?php endif; ?>

					<h2><?php the_field( 'col-1-title', $post_id ); ?></h2>

					<p><?php the_field( 'col-1-content', $post_id ); ?></p>

				</div><!-- end front-page-column-one -->

			</div><!-- end col-md-4 -->

			<div class="col-md-4">

				<div class="front-page-column-two">

					<?php if( get_field('col-2-img') ): ?>

						<img src="<?php the_field( 'col-2-img' ); ?>" />

					<?php endif; ?>

					<h2><?php the_field( 'col-2-title', $post_id ); ?></h2>

					<p><?php the_field( 'col-2-content', $post_id ); ?></p>

				</div><!-- end front-page-column-two -->

			</div><!-- end col-md-4 -->

			<div class="col-md-4">

				<div class="front-page-column-three">

						<?php if( get_field('col-3-img') ): ?>

						<img src="<?php the_field( 'col-3-img' ); ?>" />

					<?php endif; ?>

					<h2><?php the_field( 'col-3-title', $post_id ); ?></h2>

					<p><?php the_field( 'col-3-content', $post_id ); ?></p>

				</div><!-- end front-page-column-three -->

			</div><!-- end col-md-4 -->

		</div><!--end row-->

	</div><!--.container-->

</section><!-- end homepage -->

<?php get_footer() ?>
