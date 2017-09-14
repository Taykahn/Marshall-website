<?php 
/**
 * Frontpage
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="nav-change">

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

<section class="section-two container-fluid">

	<div class="parallax" style="background-image: url('<?php the_field( 'portfolio_img_br', $post_id ) ?>')">

		<div class="portfolio-section-header">

			<h1>Portfolio</h1>

		</div><!-- end page-header -->

	</div><!-- end parallax -->

</section><!-- end img-br -->

<section id="portfolio">

	<div class="container port-container">

		<div class="row">

			<div class="col-md-12">

				<?php if( have_rows( 'portfolio', $post_id ) ): ?>

					<?php while ( have_rows( 'portfolio', $post_id ) ) : the_row(); ?>

						<div class="col-md-6">

						<div class="flip-container">

							<div class="flipper">

								<div class="front">

									<div class="portfolio-title">

										<h2><?php the_sub_field( 'title', $post_id ); ?></h2>

									</div><!-- end portfolio-title -->

									<div class="portfolio-img">

										<img src="<?php the_sub_field( 'image', $post_id ); ?>" />

									</div><!-- end portfolio-img -->

								</div><!-- end front -->

								<div class="back">

									<div class="portfolio-title">

										<h2><?php the_sub_field( 'title', $post_id ); ?></h2>

									</div><!-- end portfolio-title -->

									<div class="portfolio-content">

										<?php the_sub_field( 'content', $post_id ); ?>

									</div><!-- end portfolio-content -->

								</div><!-- end back -->

							</div><!-- end flipper -->

						</div><!-- end flip-container -->

						</div>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-12 -->

		</div><!-- end row -->

	</div><!-- end container -->

</section><!-- end portfolio -->

</div><!-- end nav-change -->

<?php get_footer() ?>
