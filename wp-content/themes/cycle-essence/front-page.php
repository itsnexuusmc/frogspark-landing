<?php get_header(); ?>

<div class="hero" style="background-image: url('<?php echo get_field('hero_image')['url']; ?>');">
	<div class="wrapper">
		<div class="flex-wrapper">
			<div class="hero__content">
				<p class="hero__title"><?php echo get_field('hero_text'); ?></p>
				<div class="hero__text">
					<span><?php echo get_field('hero_statistic'); ?></span>
				</div>

				<p class="hero__description"><span><?php echo get_field('hero_span_text'); ?></span> <?php echo get_field('hero_description'); ?></p>

				<p class="hero__description hero__description--blue"><?php echo get_field('hero_opening_date'); ?></p>

				<?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1, 'title' => false, 'description' => false ) ); ?>

			</div>
		</div>
	</div>
</div>

<!-- Include the footer -->
<?php get_footer(); ?>