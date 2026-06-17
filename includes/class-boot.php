<?php
/**
 * Boot class
 *
 * @package Sabuz/Pacer/Classes
 */

namespace Sabuz\Pacer;

defined( 'ABSPATH' ) || exit;

/**
 * The main class for loading theme features
 */
final class Boot {
	/**
	 * Register class hooks
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function __construct() {
		// load dependent files.
		$this->load_dependencies();

		// register action hooks.
		add_action( 'after_setup_theme', array( $this, 'theme_support' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );

		// register filter hooks.
		add_filter( 'get_custom_logo', array( $this, 'fallback_image_logo' ), 10, 2 );

		// power up admin notices.
		if ( is_admin() ) {
			new Admin_Notice();
		}
	}

	/**
	 * Load required dependencies
	 *
	 * @since 1.0.0
	 * @return void
	 */
	protected function load_dependencies() {
		if ( is_admin() ) {
			require_once get_template_directory() . '/includes/class-admin-notice.php';
		}
	}

	/**
	 * Register theme supports
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function theme_support() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'editor-styles' );
		add_editor_style(
			array(
				'https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400..700&display=swap',
				'public/css/editor.css',
			)
		);
	}

	/**
	 * Enqueue assets for frontend
	 *
	 * @since 1.0.0
	 * @return void
	 */
	public function enqueue_scripts() {
		// phpcs:ignore
		wp_enqueue_style(
			'google-fonts',
			'https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400..700&display=swap',
			array(),
			null
		);

		wp_enqueue_style(
			'pacer',
			get_template_directory_uri() . '/public/css/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}

	/**
	 * Add fallback image logo
	 *
	 * @since 1.0.7
	 * @param string $html Custom logo HTML.
	 * @param int    $blog_id ID of the blog.
	 * @return string
	 */
	public function fallback_image_logo( $html, $blog_id ) {
		if ( empty( $html ) ) {
			$aria_current = is_front_page() && ! is_paged() ? ' aria-current="page"' : '';
			$image        = '<img width="250" height="131" src="' . esc_url( get_template_directory_uri() . '/public/image/logo.png' ) . '" class="custom-logo custom-logo-fallback" loading="eager" decoding="async" alt="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" />';

			$html = sprintf(
				'<a href="%1$s" class="custom-logo-link" rel="home"%2$s>%3$s</a>',
				esc_url( home_url( '/' ) ),
				$aria_current,
				$image
			);
		}

		return $html;
	}
}
