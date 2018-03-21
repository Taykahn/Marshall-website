<?php
/**
 * single
 */

 get_header(); ?>

	<div class="container single-pg">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page-header -->

						<div class="sgl-pg-content">

							<p><?php the_content(); ?></p>

							<?php the_post_thumbnail(); ?>

						</div><!-- .sgl-pg-content -->

						<div class="image-section col-sm-12">

							<div class="image-gallery">

								<?php include( 'partials/ig-blog.php' ); ?>

							</div><!-- .image-gallery -->

						</div><!-- .image-section .col-md-12 -->

					<?php endwhile; else: ?>

					<div class="page-header">

						<h1>Oh no!</h1>

					</div><!-- .page-header -->

					<p>No content is appearing for this page!</p>

				<?php endif; ?>

			</div><!-- .col-md-9 -->

		</div><!-- .row -->

	</div><!-- .container -->

<?php get_footer(); ?>