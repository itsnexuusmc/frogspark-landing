<?php
	// Require ACF options pages
	require_once(__DIR__ . '/includes/acf.php');

	// Register and enqueue the scripts
	function cycleessence_add_header_scripts() {
		if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
			wp_register_script('cycleessence', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '1.0.0');
			wp_localize_script('cycleessence', 'admin_ajax', array('ajaxurl' => admin_url('admin-ajax.php')));
			wp_enqueue_script('cycleessence');
		}
	}

	// Add the scripts
	add_action('init', 'cycleessence_add_header_scripts');

	// Add the stylesheet
	function cycleessence_add_styles() {
		wp_register_style('cycleessence', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
		wp_enqueue_style('cycleessence');
	}

	// Enqueue it
	add_action('wp_enqueue_scripts', 'cycleessence_add_styles');

	// Remove unnecessary stuff from the header
	function cycleessence_clean_up_head() {
		remove_action('wp_head', 'feed_links_extra', 3);
		remove_action('wp_head', 'feed_links', 2);
		remove_action('wp_head', 'rsd_link');
		remove_action('wp_head', 'wlwmanifest_link');
		remove_action('wp_head', 'index_rel_link');
		remove_action('wp_head', 'parent_post_rel_link', 10, 0);
		remove_action('wp_head', 'start_post_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
		remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
		remove_action('wp_head', 'wp_generator');
		remove_action('wp_head', 'wp_oembed_add_discovery_links');
		remove_action('wp_head', 'wp_shortlink_wp_head');

		remove_action('admin_print_styles', 'print_emoji_styles');
		remove_action('wp_head', 'print_emoji_detection_script', 7);
		remove_action('admin_print_scripts', 'print_emoji_detection_script');
		remove_action('wp_print_styles', 'print_emoji_styles');
		remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
		remove_filter('the_content_feed', 'wp_staticize_emoji');
		remove_filter('comment_text_rss', 'wp_staticize_emoji');
	}

	// Add the clean up head
	add_action('init', 'cycleessence_clean_up_head');

	// Remove the admin bar
	add_filter('show_admin_bar', function() {return false;});
?>





















