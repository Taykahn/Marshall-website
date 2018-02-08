<?php 
/**
 * Frontpage
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="nav-change">

<section id="frontpage" class="container-fluid no-pad">

	<div class="row section-1">

		<div class="col-sm-4">

			<div class="front-page-column-one">

				<?php if( get_field('col-1-img') ): ?>

					<img src="<?php the_field( 'col-1-img' ); ?>" />

				<?php endif; ?>

				<h2><?php the_field( 'col-1-title', $post_id ); ?></h2>

				<p><?php the_field( 'col-1-content', $post_id ); ?></p>

			</div><!-- .front-page-column-one -->

		</div><!-- .col-sm-4 -->

		<div class="col-sm-4">

			<div class="front-page-column-two">

				<?php if( get_field('col-2-img') ): ?>

					<img src="<?php the_field( 'col-2-img' ); ?>" />

				<?php endif; ?>

				<h2><?php the_field( 'col-2-title', $post_id ); ?></h2>

				<p><?php the_field( 'col-2-content', $post_id ); ?></p>

			</div><!-- .front-page-column-two -->

		</div><!-- .col-sm-4 -->

		<div class="col-sm-4">

			<div class="front-page-column-three">

					<?php if( get_field('col-3-img') ): ?>

					<img src="<?php the_field( 'col-3-img' ); ?>" />

				<?php endif; ?>

				<h2><?php the_field( 'col-3-title', $post_id ); ?></h2>

				<p><?php the_field( 'col-3-content', $post_id ); ?></p>

			</div><!-- .front-page-column-three -->

		</div><!-- .col-sm-4 -->

	</div><!-- .row .section-1 -->

</section><!-- #frontpage .container-fluid .no-pad -->

<section class="section-two container-fluid">

	<div class="parallax bkgd-img" style="background-image: url('<?php the_field( 'portfolio_img_br', $post_id ) ?>')">

		<div class="portfolio-section-header">

			<h1>Portfolio</h1>

			<div class="port-chev">

				<a href="#portfolio"><img src="<?php the_field( 'port_chev', 'option' ) ?>"></a>

			</div><!-- .port-chev -->

		</div><!-- .portfolio-section-header -->

	</div><!-- .parallax .bkgd-img -->

</section><!-- .section-two .container-fluid -->

<section id="portfolio">

	<div class="container max no-pad port-container">

		<?php if( have_rows( 'portfolio', $post_id ) ): ?>

			<?php while ( have_rows( 'portfolio', $post_id ) ) : the_row(); ?>

				<div class="col-md-6">

					<div class="flip-container">

						<div class="flipper">

							<div class="front">

								<div class="portfolio-img fp-port-img">

									<img src="<?php the_sub_field( 'image', $post_id ); ?>" />

								</div><!-- .portfolio-img -->

							</div><!-- .front -->

							<div class="back">

								<div class="portfolio-title">

									<h2><?php the_sub_field( 'title', $post_id ); ?></h2>

								</div><!-- .portfolio-title -->

								<div class="fp-portfolio-content">

									<?php the_sub_field( 'content', $post_id ); ?>

								</div><!-- .portfolio-content -->

							</div><!-- .back -->

						</div><!-- .flipper -->

					</div><!-- .flip-container -->

				</div><!-- .col-md-6 -->

			<?php endwhile; ?>

		<?php endif; ?>

	</div><!-- .container -->

</section><!-- #portfolio -->

</div><!-- #nav-change -->

<?php get_footer() ?>
