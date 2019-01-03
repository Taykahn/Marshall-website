<?php
/**
 * Template for Frontpage Section 1
 */

global $post;

$post_id = $post->ID;

?>

<section id="nav-change" class="middle-fp container no-pad">

	<div class="middle-bkgd-img" style="background-image: url('<?php the_field( 'section_1_img_br') ?>')">

		<div class="section-1">

			<div class="col-sm-12">

				<div class="front-page-column-one">

					<?php if( get_field('col-1-img') ): ?>

						<img data-aos="fade-right" src="<?php the_field( 'col-1-img' ); ?>" />

					<?php endif; ?>

					<h2 data-aos="zoom-in"><?php the_field( 'col-1-title', $post_id ); ?></h2>

					<div class="col-1-p" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">

						<p><?php the_field( 'col-1-content', $post_id ); ?></p>

					</div><!-- .col-1-p -->

				</div><!-- .front-page-column-one -->

			</div><!-- .col-sm-12 -->

		</div><!-- .section-1 -->

		<div class="section-2">

			<div class="col-sm-12">

				<div class="front-page-column-two">

					<?php if( get_field('col-2-img') ): ?>

						<img data-aos="fade-left" src="<?php the_field( 'col-2-img' ); ?>" />

					<?php endif; ?>

					<h2 data-aos="zoom-in"><?php the_field( 'col-2-title', $post_id ); ?></h2>

					<div class="col-2-p" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">

						<p><?php the_field( 'col-2-content', $post_id ); ?></p>

					</div><!-- .col-2-p -->

				</div><!-- .front-page-column-two -->

			</div><!-- .col-sm-12 -->

		</div><!-- .section-2 -->

		<div class="section-3">

			<div class="col-sm-12">

				<div class="front-page-column-three">

					<?php if( get_field('col-3-img') ): ?>

						<img data-aos="fade-right" src="<?php the_field( 'col-3-img' ); ?>" />

					<?php endif; ?>

					<h2 data-aos="zoom-in"><?php the_field( 'col-3-title', $post_id ); ?></h2>

					<div class="col-3-p" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">

						<p><?php the_field( 'col-3-content', $post_id ); ?></p>

					</div><!-- .col-3-p -->

				</div><!-- .front-page-column-three -->

			</div><!-- .col-sm-12 -->

		</div><!--.section-3 -->

	</div><!-- parallax middle-bkgd-img -->

</section><!-- .container-fluid .no-pad -->