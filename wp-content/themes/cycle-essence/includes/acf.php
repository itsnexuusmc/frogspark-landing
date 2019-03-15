<?php
	if (function_exists('acf_add_options_page')) {
		acf_add_options_page(array(
			'page_title'    => 'Theme General Settings',
			'menu_title'    => 'Theme Settings',
			'menu_slug'     => 'theme-general-settings',
		));

			acf_add_options_sub_page(array(
				'page_title'   => 'Contact Details',
				'menu_title'   => 'Contact',
				'parent_slug'  => 'theme-general-settings',
			));
	}
?>