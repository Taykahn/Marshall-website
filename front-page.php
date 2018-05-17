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

		<div class="portfolio-section-header" id="button">

			<a href="http://localhost:3000/portfolio/"><button type="button" class="btn"><h1>Portfolio</h1></button></a>

		</div><!-- .portfolio-section-header -->

	</div><!-- .parallax .bkgd-img -->

</section><!-- .section-two .container-fluid -->

</div><!-- #nav-change -->

<?php get_footer() ?>
