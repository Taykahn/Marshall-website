<?php 
/**
 * Contact Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

?>

<div id="nav-change">

	<div class="container">

		<div class="banner no-pad" style="background: url( '<?php the_field( 'contact_img', $post_id ); ?>' ) 50%/cover no-repeat;">

		<div class="row">

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="contact-form">

						<p><?php the_content(); ?></p>

					</div><!-- .contact-form -->

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .row -->

	</div><!-- .container -->

</div><!-- #nav-change -->

<?php get_footer(); ?>