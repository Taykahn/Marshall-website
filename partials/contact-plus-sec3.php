<?php
/**
 * Template for Frontpage Section 3
 */

global $post;

$post_id = $post->ID;

?>

<section class="last-section">

	<div class="container-fluid">

		<div class="col-sm-5">

			<div class="contact-form">

				<div class="contact-bkgd-img" style="background-image: url('<?php the_field( 'contact_img', $post_id ) ?>')">

					<h2>Contact</h2>

					<?php the_field( 'contact_form', $post_id ); ?>

				</div><!-- .contact-bkgd-img -->

			</div><!-- .contact-form -->

		</div><!-- .col-sm-5 -->

		<div class="col-sm-7">

			<div class="lsr-bkgd-img" style="background: url('<?php the_field( 'background_image_lsr' ) ?>') 50%/cover no-repeat;">

				<div class="last-sec-right">

					<?php the_field( 'last_section_right', $post_id ); ?>

				</div><!-- .last-sec-right -->

			</div><!-- .lsr-bkgd-img -->

		</div><!-- .col-sm-7 -->

	</div><!-- .container-fluid -->

</section><!-- .last-section -->