<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<?php wp_head(); ?>
	</head>

	<!-- Add page transition class -->
	<body <?php body_class('do-page-transition'); ?>>
		<div class="page-transition">
			<div class="bike-wrap">
				<!-- Get the loader svg -->
				<?php echo file_get_contents(get_template_directory_uri() . '/assets/img/loader.svg'); ?>
			</div>
		</div>
		<header class="header">
			<div class="wrapper">
				<div class="flex-wrapper">
					<div class="header__content">
						<!-- Get the logo -->
						<a href="/"><?php echo file_get_contents(get_template_directory_uri() . '/assets/img/logo.svg'); ?></a>

						<div class="header__end-content">
							<!-- Get the address from the options page -->
							<div class="header__address"><?php the_field('contact_address', 'options'); ?></div>
							<!-- Get the email from the options page -->
							<a href="mailto:<?php the_field('contact_email', 'options'); ?>" class="header__email"><?php the_field('contact_email', 'options'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</header>