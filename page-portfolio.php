<?php 
/**
 * Portfolio
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="nav-change">

	<div class="port-bkgd-img" style="background-image: url('<?php the_field( 'background_image_port_page') ?>')">

		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="portfolio-page-header">

						<h1><?php the_title(); ?></h1>

					</div><!-- .page-header --><hr>

					<?php if( have_rows( 'portfolio', $post_id ) ): ?>

						<?php while ( have_rows( 'portfolio', $post_id ) ) : the_row(); ?>

							<div class="col-md-12">

								<div class="portfolio-title">

									<h2><?php the_sub_field( 'title', $post_id ); ?></h2>

								</div><!-- .portfolio-title -->

							</div><!-- .col-md-12 -->

							<div class="col-md-6 web-content">

								<div class="portfolio-img">

									<img src="<?php the_sub_field( 'image', $post_id ); ?>" />

								</div><!-- .portfolio-img -->

							</div><!-- .col-md-6 -->

							<div class="col-md-6 web-content">

								<div class="portfolio-content">

									<?php the_sub_field( 'content', $post_id ); ?>

								</div><!-- .portfolio-content -->

							</div><!-- .col-md-6 -->

						<?php endwhile; ?>

					<?php endif; ?>

				</div><!-- .col-md-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</div><!-- .port-bkgd-img -->

</div><!-- #nav-change -->

<?php get_footer(); ?>