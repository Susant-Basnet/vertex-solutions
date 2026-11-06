<?php
/**
 * VERTEX Solutions functions and definitions.
 *
 * @package VERTEX_Solutions
 * @since   1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'vertex_solutions_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function vertex_solutions_setup() {
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );

		// Load the same stylesheet inside the block editor.
		add_editor_style( 'style.css' );
	}
endif;
add_action( 'after_setup_theme', 'vertex_solutions_setup' );

if ( ! function_exists( 'vertex_solutions_enqueue_assets' ) ) :
	/**
	 * Enqueues front-end styles and scripts.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function vertex_solutions_enqueue_assets() {
		$version = wp_get_theme()->get( 'Version' );

		wp_enqueue_style(
			'vertex-solutions-style',
			get_stylesheet_uri(),
			array(),
			$version
		);

		wp_enqueue_script(
			'vertex-solutions-tabs',
			get_theme_file_uri( 'assets/js/tabs.js' ),
			array(),
			$version,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);

		wp_enqueue_script(
			'vertex-solutions-quote-estimator',
			get_theme_file_uri( 'assets/js/quote-estimator.js' ),
			array(),
			$version,
			array(
				'in_footer' => true,
				'strategy'  => 'defer',
			)
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'vertex_solutions_enqueue_assets' );

if ( ! function_exists( 'vertex_solutions_register_block_styles' ) ) :
	/**
	 * Registers block style variations used by the theme patterns.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function vertex_solutions_register_block_styles() {
		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'eyebrow',
				'label' => __( 'Eyebrow', 'vertex-solutions' ),
			)
		);

		register_block_style(
			'core/paragraph',
			array(
				'name'  => 'badge',
				'label' => __( 'Badge', 'vertex-solutions' ),
			)
		);
	}
endif;
add_action( 'init', 'vertex_solutions_register_block_styles' );

if ( ! function_exists( 'vertex_solutions_register_pattern_category' ) ) :
	/**
	 * Registers the pattern category used by the theme patterns.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function vertex_solutions_register_pattern_category() {
		register_block_pattern_category(
			'vertex-solutions-sections',
			array(
				'label'       => __( 'VERTEX Solutions', 'vertex-solutions' ),
				'description' => __( 'Homepage sections from the VERTEX Solutions theme.', 'vertex-solutions' ),
			)
		);
	}
endif;
add_action( 'init', 'vertex_solutions_register_pattern_category' );

if ( ! function_exists( 'vertex_solutions_render_shortcode_block' ) ) :
	/**
	 * Runs shortcodes inside Shortcode blocks placed in templates and patterns.
	 *
	 * Block theme templates are not passed through the_content, so shortcodes
	 * such as Contact Form 7 would otherwise print as plain text.
	 *
	 * @since 1.0.1
	 *
	 * @param string $block_content The rendered block content.
	 * @return string
	 */
	function vertex_solutions_render_shortcode_block( $block_content ) {
		return do_shortcode( $block_content );
	}
endif;
add_filter( 'render_block_core/shortcode', 'vertex_solutions_render_shortcode_block' );

// Contact Form 7: keep the markup from the form template as written (no automatic <p>/<br> wrapping).
add_filter( 'wpcf7_autop_or_not', '__return_false' );