<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header">
			<div class="wrapper">
				<div class="flex-wrapper">
					<div class="header__content">

						<?php include ('logo.php'); ?>

						<div class="header__end-content">
							<div class="header__address"><?php the_field('contact_address', 'options'); ?></div>
							<a href="mailto:<?php the_field('contact_email', 'options'); ?>" class="header__email"><?php the_field('contact_email', 'options'); ?></a>
						</div>
					</div>
				</div>
			</div>
		</header>