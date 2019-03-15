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
							<p class="header__address">Street Name, Nottingham, NG1 4GY</p>
							<a href="mailto:info@cycleessence.co.uk" class="header__email">INFO<span>@</span>CYCLEESSENCE.CO.UK</a>
						</div>
					</div>
				</div>
			</div>
		</header>