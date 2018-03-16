<?php
/**
 * Template Name: Archives
 */

get_header();

if ( get_query_var( 'paged' ) ) { 
	$paged = get_query_var( 'paged' ); 
}
elseif ( get_query_var( 'page' ) ) { 
	$paged = get_query_var( 'page' ); 
}
else { 
	$paged = 1;
}

query_posts('posts_per_page=&paged=' . $paged); 

$query = new WP_Query( array( 'meta_key' => '_is_ns_featured_post', 'meta_value' => 'yes' ) );


$query = array( 
	'post_type' => 'post',
	'paged'     => $paged
);
$blog = new WP_Query( $query );

?>

<section id="nav-change" id="blog" class="two-column row max no-pad">

	<div class="inner-wrapper container">

		<div class="col-sm-8">

			<div class="blog-page">

				<div class="blog-pg-title">

					<h1>Blog</h1>

				</div><!-- end blog-pg-title -->

				<?php if ( $blog->have_posts() ) : ?>

					<?php while ( $blog->have_posts() ) : $blog->the_post() ?>

						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						<h5>Author: <?php the_author(); ?> | Posted on: <?php the_date(); ?></h5>

						<h5>Categories: <?php the_category(); ?></h5>

						<div class="blog-img">

							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

						</div><!-- .blog-img -->

						<div class="blog-content">

							<p><?php the_content(); ?></p>

						</div><!-- .blog-content -->

					<?php endwhile ?>

					<div class="col-md-8 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- .col-md-8 options border-bottom -->

				<?php endif; wp_reset_postdata() ?>

			</div><!--.blog-page -->

		</div><!-- .col-sm-8 -->

		<?php get_sidebar(); ?>

	</div><!-- .inner-wrapper .container -->

</section><!-- #nav-change .two-column .row .max .no-pad -->

<?php get_footer(); ?>