<?php

	function my_theme_enqueue_styles() {
		$parent_style = 'parent-style';

		// parent theme style
	    wp_enqueue_style(
			$parent_style,
			get_template_directory_uri() . '/lib/vendor/bootstrap/css/bootstrap.min.css'
			);

		// child theme styles
		wp_enqueue_style( 'child-style',
	        get_stylesheet_directory_uri() . '/lib/styles/main.css',
	        array( $parent_style ),
	        wp_get_theme()->get('Version')
	    	);
		}

		add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
