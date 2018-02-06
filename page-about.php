<?php 
/**
 * About Page
 */

get_header(); ?>

<div id="nav-change">

	<div class="container about-page">

		<div class="row">

			<div class="col-sm-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="about-page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- .page-header -->

						<div class="col-sm-6">

							<div class="about-img">

								<?php the_post_thumbnail(); ?>

							</div><!-- .contact-img -->

						</div><!-- .col-sm-6 -->

						<div class="col-sm-6">

							<div class="about-content">

								<?php the_content(); ?>

							</div><!-- .contact-content -->

						</div><!-- .col-sm-6 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- .col-sm-12 -->

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- #nav-change -->

<?php get_footer(); ?>