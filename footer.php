<?php 
/**
 * Footer
 */ 
?>

</main>

	<footer class="footer">

		<?php if ( is_front_page() ) { ?>

			<a href="#top"><img src="<?php the_field( 'arrow_up', 'option' ) ?>"></a>

		<?php } else { ?>

		<?php } ?>

		<section class="one-column row no-pad">

			<div class="copyright">

				<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?></p>

			</div><!-- .copyright -->

		</section><!-- .two-column -->

	</footer><!-- .footer -->

	<?php wp_footer(); ?>

</body>

</html>