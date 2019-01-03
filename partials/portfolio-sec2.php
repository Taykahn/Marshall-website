<?php
/**
 * Template for Frontpage Section 2
 */

$args = array(
	'post_type' => 'frontpage-portfolio'
	);

$fp_port = new WP_Query( $args );

global $post;

$post_id = $post->ID;

?>

<section class="container portfolio">

	<div class="portfolio-bkgd-img" style="background: url( '<?php the_field( 'fp_portfolio_bkgd_img') ?>' ) 50%/cover no-repeat; ">

		<div class="portfolio-title">

			<h1>Recent Work</h1>

		</div><!-- .portfolio-title -->

		<?php if( get_field('frontpage_portfolio') ): ?>

			<?php while ( has_sub_field('frontpage_portfolio') ) : ?>

				<div class="container">

					<div class="col-sm-7 port-1">

						<?php if( get_row_layout() == 'first_project' ): ?>

							<div class="img-port hvrbox" data-aos="fade-up">

								<img src="<?php the_sub_field( 'image') ?>" class="hvrbox-layer_bottom">

								<div class="hvrbox-layer_top hvrbox-layer_scale">

									<div class="hvrbox-text">

										<button class="buttonfx slidebottomleft"><?php the_sub_field( 'button' ) ?></button>

									</div><!-- .hvbox-text -->

								</div><!-- .hvrbox-layer_top .hvrbox-layer_scale -->

							</div><!-- .img-port .hvrbox -->

						<?php endif; ?>

					</div><!-- .col-sm-7 .port-1 -->

				</div><!-- .container -->

				<div class="container">

					<div class="col-sm-6 port-2">

						<?php if( get_row_layout() == 'second_project' ): ?>

							<div class="img-port hvrbox" data-aos="fade-up">

								<img src="<?php the_sub_field( 'image') ?>" class="hvrbox-layer_bottom">

								<div class="hvrbox-layer_top hvrbox-layer_scale">

									<div class="hvrbox-text">

										<button class="buttonfx slidebottomleft"><?php the_sub_field( 'button' ) ?></button>

									</div><!-- .hvbox-text -->

								</div><!-- .hvrbox-layer_top .hvrbox-layer_scale -->

							</div><!-- .img-port .hvrbox -->

						<?php endif; ?>

					</div><!-- .col-sm-7 .port-2 -->

				</div><!-- .container -->

				<div class="container">

					<div class="col-sm-7 port-3">

						<?php if( get_row_layout() == 'third_project' ): ?>

							<div class="img-port hvrbox" data-aos="fade-up">

								<img src="<?php the_sub_field( 'image') ?>" class="hvrbox-layer_bottom">

								<div class="hvrbox-layer_top hvrbox-layer_scale">

									<div class="hvrbox-text">

										<button class="buttonfx slidebottomleft"><?php the_sub_field( 'button' ) ?></button>

									</div><!-- .hvbox-text -->

								</div><!-- .hvrbox-layer_top .hvrbox-layer_scale -->

							</div><!-- .img-port .hvrbox -->

						<?php endif; ?>

					</div><!-- .col-sm-7 .port-3 -->

				</div><!-- .container -->

				<div class="container">

					<div class="col-sm-6 port-4">

						<?php if( get_row_layout() == 'forth_project' ): ?>

							<div class="img-port hvrbox" data-aos="fade-up">

								<img src="<?php the_sub_field( 'image') ?>" class="hvrbox-layer_bottom">

								<div class="hvrbox-layer_top hvrbox-layer_scale">

									<div class="hvrbox-text">

										<button class="buttonfx slidebottomleft"><?php the_sub_field( 'button' ) ?></button>

									</div><!-- .hvbox-text -->

								</div><!-- .hvrbox-layer_top .hvrbox-layer_scale -->

							</div><!-- .img-port .hvrbox -->

						<?php endif; ?>

					</div><!-- .col-sm-7 .port-4 -->

				</div><!-- .container -->

				<div class="container">

					<div class="col-sm-7 port-5">

						<?php if( get_row_layout() == 'fifth_project' ): ?>

							<div class="img-port hvrbox" data-aos="fade-up">

								<img src="<?php the_sub_field( 'image') ?>" class="hvrbox-layer_bottom">

								<div class="hvrbox-layer_top hvrbox-layer_scale">

									<div class="hvrbox-text">

										<button class="buttonfx slidebottomleft"><?php the_sub_field( 'button' ) ?></button>

									</div><!-- .hvbox-text -->

								</div><!-- .hvrbox-layer_top .hvrbox-layer_scale -->

							</div><!-- .img-port .hvrbox -->

						<?php endif; ?>

					</div><!-- .col-sm-7 .port-5 -->

				</div><!-- .container -->

				<div class="container">

					<div class="col-sm-6 port-6">

						<?php if( get_row_layout() == 'sixth_project' ): ?>

							<div class="img-port hvrbox" data-aos="fade-up">

								<img src="<?php the_sub_field( 'image') ?>" class="hvrbox-layer_bottom">

								<div class="hvrbox-layer_top hvrbox-layer_scale">

									<div class="hvrbox-text">

										<button class="buttonfx slidebottomleft"><?php the_sub_field( 'button' ) ?></button>

									</div><!-- .hvbox-text -->

								</div><!-- .hvrbox-layer_top .hvrbox-layer_scale -->

							</div><!-- .img-port .hvrbox -->

						<?php endif; ?>

					</div><!-- .col-sm-7 .port-6 -->

				</div><!-- .container -->

			<?php endwhile; ?>

			<?php else : ?>

				<!-- no layouts found -->

		<?php endif; ?>

		<?php wp_reset_postdata(); ?>

		<div class="view-all-port-btn" id="contactSection">

			<a href="http://localhost:3000/portfolio/"<button type="button" class="btn btn-red">View All Work</button></a>

		</div><!-- .view-all-port-btn -->

	</div><!-- .portfolio-bkgd-img -->

</section><!-- .portfolio -->