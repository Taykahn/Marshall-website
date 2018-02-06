<div class="clear">

	<?php $images = get_field('gallery'); ?>

		<?php if( $images ): ?>

			<div class="slider-for">

				<?php foreach( $images as $image ): ?>

					<div class="slick-container">

					</div><!-- .slick-container -->

				<?php endforeach; ?>

			</div><!-- .slider-for -->

			<div class="slider-nav">

					<?php foreach( $images as $image ): ?>

						<div>

							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

						</div>

					<?php endforeach; ?>

			</div>

		<?php endif; ?>

</div><!-- .clear -->