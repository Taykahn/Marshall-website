<?php 
/**
 * About Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="nav-change">

	<div class="about-bkgd-img" style="background-image: url('<?php the_field( 'background_image_about_page', $post_id ) ?>')">

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

	</div><!--.about-bkgd-img --> 

</div><!-- #nav-change -->

<?php get_footer(); ?>