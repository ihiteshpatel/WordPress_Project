<?php
/**
 * Enqueue theme assets
 *
 * @package lofts-theme
 */

namespace LOFTS_THEME\Inc;

use LOFTS_THEME\Inc\Traits\Singleton;

/**
 * Class Assets
 */
class Assets {
	use Singleton;

	/**
	 * Construct method.
	 */
	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'get_header', array( $this, 'remove_wp_emoji' ) );
		add_action( 'get_header', array( $this, 'move_scripts_to_footer' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );

        /**
		 * The 'enqueue_block_assets' hook includes styles and scripts both in editor and frontend,
		 * except when is_admin() is used to include them conditionally
		 */
		add_action( 'enqueue_block_assets', array( $this, 'enqueue_editor_assets' ) );
		add_filter( 'script_loader_tag', array( $this, 'script_additional_attrs' ), 10, 2 );
		add_action( 'wp_print_footer_scripts', array( $this, 'lazy_load_scripts' ) );
	}

	/**
	 * Remove Emoji from the page.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function remove_wp_emoji() {

		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
	}

	/**
	 * Move render blocking JS to the footer.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function move_scripts_to_footer() {
		// Remove default jQuery registration through WordPress.
		wp_dequeue_script( 'jquery' );
		wp_dequeue_script( 'jquery-migrate' );
		wp_dequeue_script( 'wp-embed' );
		wp_deregister_script( 'jquery' );
		wp_deregister_script( 'jquery-migrate' );
		wp_deregister_script( 'wp-embed' );

		wp_enqueue_script( 'jquery', '/wp-includes/js/jquery/jquery.min.js', array(), LOFTS_THEME_THEME_VERSION, true );
	}

	/**
	 * Register and Enqueue styles.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_styles() {

		// Register styles.
		
        wp_register_style( 'main-css', LOFTS_THEME_CSS_URI . '/main.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/main.css' ), 'all' );
        wp_register_style( 'media-css', LOFTS_THEME_CSS_URI . '/media.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/media.css' ), 'all' );
        wp_register_style( 'common-css', LOFTS_THEME_CSS_URI . '/common.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/common.css' ), 'all' );
        wp_register_style( 'font-css', LOFTS_THEME_CSS_URI . '/font.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/font.css' ), 'all' );
        wp_register_style( 'slick-css', LOFTS_THEME_CSS_URI . '/slick.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/slick.css' ), 'all' );
        wp_register_style( 'slick-theme-css', LOFTS_THEME_CSS_URI . '/slick-theme.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/slick-theme.css' ), 'all' );
        wp_register_style( 'wpo-min-css', LOFTS_THEME_CSS_URI . '/wpo.min.css', array(), filemtime( LOFTS_THEME_CSS_DIR_PATH . '/wpo.min.css' ), 'all' );

		// Enqueue Styles.
		wp_enqueue_style( 'main-css' );
        wp_enqueue_style( 'media-css' );
        wp_enqueue_style( 'common-css' );
        wp_enqueue_style( 'font-css' );
        wp_enqueue_style( 'slick-css' );
        wp_enqueue_style( 'slick-theme-css' );
        wp_enqueue_style( 'wpo-min-css' );

	}

	/**
	 * Register and Enqueue Scripts.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function register_scripts() {
		// Register scripts.
		
        wp_register_script( 'lofts-head-js', LOFTS_THEME_JS_URI . '/lofts-head.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/lofts-head.js' ), true );
        wp_register_script( 'lofts-header-min-js', LOFTS_THEME_JS_URI . '/lofts-header-min.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/lofts-header-min.js' ), true );
        wp_register_script( 'lofts-header-js', LOFTS_THEME_JS_URI . '/lofts-header.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/lofts-header.js' ), true );
        wp_register_script( 'lofts-footer-js', LOFTS_THEME_JS_URI . '/lofts-footer.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/lofts-footer.js' ), true );
        wp_register_script( 'lofts-gallery-scroll-js', LOFTS_THEME_JS_URI . '/lofts-gallery-scroll.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/lofts-gallery-scroll.js' ), true );
        wp_register_script( 'lofts-slick-min-js', LOFTS_THEME_JS_URI . '/slick.min.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/slick.min.js' ), true );
        wp_register_script( 'lofts-custom-slick-js', LOFTS_THEME_JS_URI . '/custom-slick.js', array( 'jquery' ), filemtime( LOFTS_THEME_JS_DIR_PATH . '/custom-slick.js' ), true );
        

		// Enqueue Scripts.
		wp_enqueue_script( 'lofts-head-js' );
        wp_enqueue_script( 'lofts-header-min-js' );
        wp_enqueue_script( 'lofts-header-js' );
        wp_enqueue_script( 'lofts-footer-js' );
        wp_enqueue_script( 'lofts-gallery-scroll-js' );
        wp_enqueue_script( 'lofts-slick-min-js' );
        wp_enqueue_script( 'lofts-custom-slick-js' );

	}

    /**
	 * Enqueue editor scripts and styles.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function enqueue_editor_assets() {

		$asset_config_file = sprintf( '%s/assets.php', LOFTS_THEME_BUILD_PATH );

		if ( ! file_exists( $asset_config_file ) ) {
			return;
		}

		$asset_config = require_once $asset_config_file;

		if ( empty( $asset_config['js/editor.js'] ) ) {
			return;
		}

		$editor_asset    = $asset_config['js/editor.js'];
		$js_dependencies = ( ! empty( $editor_asset['dependencies'] ) ) ? $editor_asset['dependencies'] : array();
		$version         = ( ! empty( $editor_asset['version'] ) ) ? $editor_asset['version'] : filemtime( $asset_config_file );

		// Theme Gutenberg blocks JS.
		if ( is_admin() ) {
			wp_enqueue_script(
				'lofts-theme-blocks-js',
				LOFTS_THEME_BUILD_JS_URI . '/blocks.js',
				$js_dependencies,
				$version,
				true
			);
		}

		// Theme Gutenberg blocks CSS.
		$css_dependencies = array(
			'wp-block-library-theme',
			'wp-block-library',
		);

		wp_enqueue_style(
			'lofts-theme-blocks-css',
			LOFTS_THEME_BUILD_CSS_URI . '/blocks.css',
			$css_dependencies,
			filemtime( LOFTS_THEME_BUILD_CSS_DIR_PATH . '/blocks.css' ),
			'all'
		);

	}
    
	/**
	 * Lazy load script code.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function lazy_load_scripts() {
		$timeout = '5';
		?>
		<script type="text/javascript" id="flying-scripts">const loadScriptsTimer = setTimeout(loadScripts,<?php echo esc_html( $timeout ); ?>* 1000
			)
			;const userInteractionEvents = ["mouseover", "keydown", "touchstart", "touchmove", "wheel"];
			userInteractionEvents.forEach(function (event) {
				window.addEventListener(event, triggerScriptLoader, {passive: !0})
			});

			function triggerScriptLoader() {
				loadScripts();
				clearTimeout(loadScriptsTimer);
				userInteractionEvents.forEach(function (event) {
					window.removeEventListener(event, triggerScriptLoader, {passive: !0})
				})
			}

			function loadScripts() {
				document.querySelectorAll("script[data-type='lazy']").forEach(function (elem) {
					elem.setAttribute("src", elem.getAttribute("data-src"))
				})
			}</script>
		<?php
	}


	/**
	 * Identify script and do the lazy load.
	 *
	 * @param string $tag Tags string.
	 * @param string $handle Handle name.
	 *
	 * @return string
	 * @since 1.0.0
	 */
	public function script_additional_attrs( $tag, $handle ) {
		if ( 'grs-ad' === $handle ) {
			return str_replace( ' src', ' data-type="lazy" data-src', $tag );
		}

        return $tag;
	}
}
