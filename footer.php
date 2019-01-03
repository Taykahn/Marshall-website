<?php 
/**
 * Footer
 */ 
?>

</main>

	<footer>

		<div class="container footer">

			<div class="row">

				<div class="col-sm-4">

					<div class="social-icons">

						<?php the_field( 'social_icons', 'options' ); ?>

					</div><!-- .social-icons -->

					<div class="footer-navbar">

						<?php include( 'includes/footer-navbar.php' ); ?>

					</div><!-- .footer-navbar -->

				</div><!-- .col-sm-4 -->

				<div class="col-sm-4">

					<div class="logo">

						<img src="<?php the_field( 'logo', 'option' ) ?>">

					</div><!-- .logo -->

					<div class="copyright">

						<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

					</div><!-- .copyright -->

				</div><!-- .col-sm-4 -->

				<div class="col-sm-4">

				</div><!-- .col-sm-4 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</footer>

	<?php wp_footer(); ?>

	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

	<script> AOS.init(); </script>

</body>

</html>