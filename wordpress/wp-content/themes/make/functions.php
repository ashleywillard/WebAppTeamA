<?php
/**
 * @package Make
 */

/**
 * The current version of the theme.
 */
define( 'TTFMAKE_VERSION', '1.0.10' );

if ( ! function_exists( 'ttfmake_is_wpcom' ) ) :
/**
 * Whether or not the current environment is WordPress.com.
 *
 * @since  1.0.0.
 *
 * @return bool    Whether or not the current environment is WordPress.com.
 */
function ttfmake_is_wpcom() {
	return ( defined( 'IS_WPCOM' ) && true === IS_WPCOM );
}
endif;

/**
 * The suffix to use for scripts.
 */
if ( ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) || ttfmake_is_wpcom() ) {
	define( 'TTFMAKE_SUFFIX', '' );
} else {
	define( 'TTFMAKE_SUFFIX', '.min' );
}

/**
 * Initial content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 620;
}

if ( ! function_exists( 'ttfmake_content_width' ) ) :
/**
 * Set the content width based on current layout
 *
 * @since  1.0.0.
 *
 * @return void
 */
function ttfmake_content_width() {
	global $content_width;

	$left = ttfmake_has_sidebar( 'left' );
	$right = ttfmake_has_sidebar( 'right' );

	// No sidebars
	if ( ! $left && ! $right ) {
		$content_width = 960;
	}
	// Both sidebars
	else if ( $left && $right ) {
		$content_width = 464;
	}
	// One sidebar
	else if ( $left || $right ) {
		$content_width = 620;
	}
}
endif;

add_action( 'template_redirect', 'ttfmake_content_width' );

/**
 * Global includes.
 */
// Custom functions that act independently of the theme templates
require get_template_directory() . '/inc/extras.php';

// Custom template tags
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions
require get_template_directory() . '/inc/customizer/bootstrap.php';

// Gallery slider
require get_template_directory() . '/inc/gallery-slider/gallery-slider.php';

/**
 * Admin includes.
 */
if ( is_admin() ) {
	// TinyMCE customizations
	require get_template_directory() . '/inc/tinymce.php';

	// TinyMCE buttons
	require get_template_directory() . '/inc/tinymce-buttons/tinymce-buttons.php';

	// Page customizations
	require get_template_directory() . '/inc/edit-page.php';

	// Page Builder
	require get_template_directory() . '/inc/builder/core/base.php';
}

/**
 * 3rd party compatibility includes.
 */
// Jetpack
// There are several plugins that duplicate the functionality of various Jetpack modules,
// so rather than conditionally loading our Jetpack compatibility file based on the presence
// of the main Jetpack class, we attempt to detect individual classes/functions related to
// their particular modules.
require get_template_directory() . '/inc/jetpack.php';

// WooCommerce
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

if ( ! function_exists( 'ttfmake_setup' ) ) :
/**
 * Sets up text domain, theme support, menus, and editor styles
 *
 * @since  1.0.0.
 *
 * @return void
 */
function ttfmake_setup() {
	// Attempt to load text domain from child theme first
	if ( ! load_theme_textdomain( 'make', get_stylesheet_directory() . '/languages' ) ) {
		load_theme_textdomain( 'make', get_template_directory() . '/languages' );
	}

	// Feed links
	add_theme_support( 'automatic-feed-links' );

	// Featured images
	add_theme_support( 'post-thumbnails' );

	// Custom background
	add_theme_support( 'custom-background', array(
		'default-color'      => ttfmake_get_default( 'background_color' ),
		'default-image'      => ttfmake_get_default( 'background_image' ),
		'default-repeat'     => ttfmake_get_default( 'background_repeat' ),
		'default-position-x' => ttfmake_get_default( 'background_position_x' ),
		'default-attachment' => ttfmake_get_default( 'background_attachment' ),
	) );

	// HTML5
	add_theme_support( 'html5', array(
		'comment-list',
		'comment-form',
		'search-form',
		'gallery',
		'caption'
	) );

	// Menu locations
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'make' ),
		'social'  => __( 'Social Profile Links', 'make' )
	) );

	// Editor styles
	$editor_styles = array();
	if ( '' !== $google_request = ttfmake_get_google_font_uri() ) {
		$editor_styles[] = $google_request;
	}

	$editor_styles[] = 'css/font-awesome.css';
	$editor_styles[] = 'css/editor-style.css';

	// Another editor stylesheet is added via ttfmake_mce_css() in inc/customizer/bootstrap.php
	add_editor_style( $editor_styles );
}
endif;

add_action( 'after_setup_theme', 'ttfmake_setup' );

if ( ! function_exists( 'ttfmake_widgets_init' ) ) :
/**
 * Register widget areas
 *
 * @since  1.0.0.
 *
 * @return void
 */
function ttfmake_widgets_init() {
	register_sidebar( array(
		'id'            => 'sidebar-left',
		'name'          => __( 'Left Sidebar', 'make' ),
		'description'   => ttfmake_sidebar_description( 'sidebar-left' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'id'            => 'sidebar-right',
		'name'          => __( 'Right Sidebar', 'make' ),
		'description'   => ttfmake_sidebar_description( 'sidebar-right' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'id'            => 'footer-1',
		'name'          => __( 'Footer 1', 'make' ),
		'description'   => ttfmake_sidebar_description( 'footer-1' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'id'            => 'footer-2',
		'name'          => __( 'Footer 2', 'make' ),
		'description'   => ttfmake_sidebar_description( 'footer-2' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'id'            => 'footer-3',
		'name'          => __( 'Footer 3', 'make' ),
		'description'   => ttfmake_sidebar_description( 'footer-3' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'id'            => 'footer-4',
		'name'          => __( 'Footer 4', 'make' ),
		'description'   => ttfmake_sidebar_description( 'footer-4' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
endif;

add_action( 'widgets_init', 'ttfmake_widgets_init' );

if ( ! function_exists( 'ttfmake_head_early' ) ) :
/**
 * Add items to the top of the wp_head section of the document head.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function ttfmake_head_early() {
	// JavaScript detection ?>
	<script type="text/javascript">
		/* <![CDATA[ */
		document.documentElement.className = document.documentElement.className.replace(new RegExp('(^|\\s)no-js(\\s|$)'), '$1js$2');
		/* ]]> */
	</script>
<?php
}
endif;

add_action( 'wp_head', 'ttfmake_head_early', 1 );

if ( ! function_exists( 'ttfmake_scripts' ) ) :
/**
 * Enqueue styles and scripts.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function ttfmake_scripts() {
	// Styles
	$style_dependencies = array();

	// Google fonts
	if ( '' !== $google_request = ttfmake_get_google_font_uri() ) {
		// Enqueue the fonts
		wp_enqueue_style(
			'ttfmake-google-fonts',
			$google_request,
			$style_dependencies,
			TTFMAKE_VERSION
		);
		$style_dependencies[] = 'ttfmake-google-fonts';
	}

	// Font Awesome
	wp_enqueue_style(
		'ttfmake-font-awesome',
		get_template_directory_uri() . '/css/font-awesome.css',
		$style_dependencies,
		'4.1.0'
	);
	$style_dependencies[] = 'ttfmake-font-awesome';

	// Main stylesheet
	wp_enqueue_style(
		'ttfmake-main-style',
		get_stylesheet_uri(),
		$style_dependencies,
		TTFMAKE_VERSION
	);
	$style_dependencies[] = 'ttfmake-main-style';

	// Print stylesheet
	wp_enqueue_style(
		'ttfmake-print-style',
		get_template_directory_uri() . '/css/print.css',
		$style_dependencies,
		TTFMAKE_VERSION,
		'print'
	);

	// Scripts
	$script_dependencies = array();

	// jQuery
	$script_dependencies[] = 'jquery';

	// Cycle2
	ttfmake_cycle2_script_setup( $script_dependencies );
	$script_dependencies[] = 'ttfmake-cycle2';

	// FitVids
	wp_enqueue_script(
		'ttfmake-fitvids',
		get_template_directory_uri() . '/js/libs/fitvids/jquery.fitvids' . TTFMAKE_SUFFIX . '.js',
		$script_dependencies,
		'1.1',
		true
	);

	// Default selectors
	$selector_array = array(
		"iframe[src*='www.viddler.com']",
		"iframe[src*='money.cnn.com']",
		"iframe[src*='www.educreations.com']",
		"iframe[src*='//blip.tv']",
		"iframe[src*='//embed.ted.com']",
		"iframe[src*='//www.hulu.com']",
	);

	// Filter selectors
	$selector_array = apply_filters( 'ttfmake_fitvids_custom_selectors', $selector_array );

	// Compile selectors
	$fitvids_custom_selectors = array(
		'selectors' => implode( ',', $selector_array )
	);

	// Send to the script
	wp_localize_script(
		'ttfmake-fitvids',
		'ttfmakeFitVids',
		$fitvids_custom_selectors
	);

	$script_dependencies[] = 'ttfmake-fitvids';

	// Global script
	wp_enqueue_script(
		'ttfmake-global',
		get_template_directory_uri() . '/js/global' . TTFMAKE_SUFFIX . '.js',
		$script_dependencies,
		TTFMAKE_VERSION,
		true
	);

	// Comment reply script
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
endif;

add_action( 'wp_enqueue_scripts', 'ttfmake_scripts' );

if ( ! function_exists( 'ttfmake_cycle2_script_setup' ) ) :
/**
 * Enqueue Cycle2 scripts
 *
 * If the environment is set up for minified scripts, load one concatenated, minified
 * Cycle 2 script. Otherwise, load each module separately.
 *
 * @since  1.0.0.
 *
 * @param  array    $script_dependencies    Scripts that Cycle2 depends on.
 *
 * @return void
 */
function ttfmake_cycle2_script_setup( $script_dependencies ) {
	if ( defined( 'TTFMAKE_SUFFIX' ) && '.min' === TTFMAKE_SUFFIX ) {
		wp_enqueue_script(
			'ttfmake-cycle2',
			get_template_directory_uri() . '/js/libs/cycle2/jquery.cycle2' . TTFMAKE_SUFFIX . '.js',
			$script_dependencies,
			TTFMAKE_VERSION,
			true
		);
	} else {
		// Core script
		wp_enqueue_script(
			'ttfmake-cycle2',
			get_template_directory_uri() . '/js/libs/cycle2/jquery.cycle2.js',
			$script_dependencies,
			'2.1.3',
			true
		);

		// Vertical centering
		wp_enqueue_script(
			'ttfmake-cycle2-center',
			get_template_directory_uri() . '/js/libs/cycle2/jquery.cycle2.center.js',
			'ttfmake-cycle2',
			'20140121',
			true
		);

		// Swipe support
		wp_enqueue_script(
			'ttfmake-cycle2-swipe',
			get_template_directory_uri() . '/js/libs/cycle2/jquery.cycle2.swipe.js',
			'ttfmake-cycle2',
			'20121120',
			true
		);
	}
}
endif;

if ( ! function_exists( 'ttfmake_head_late' ) ) :
/**
 * Add additional items to the end of the wp_head section of the document head.
 *
 * @since  1.0.0.
 *
 * @return void
 */
function ttfmake_head_late() { ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
}
endif;

add_action( 'wp_head', 'ttfmake_head_late', 99 );

/**
 * Determine if the companion plugin is installed.
 *
 * @since  1.0.4.
 *
 * @return bool    Whether or not the companion plugin is installed.
 */
function ttfmake_is_plus() {
	return apply_filters( 'ttfmake_is_plus', class_exists( 'TTFMP_App' ) );
}

/**
 * Add styles to admin head for Make Plus
 *
 * @since 1.0.6.
 *
 * @return void
 */
function ttfmake_plus_styles() {
	if ( ttfmake_is_plus() ) {
		return;
	}
	?>
	<style type="text/css">
	#ttfmake-plus-metabox h3:after,
	#customize-control-ttfmake_footer-whitelabel-heading span:after,
	#customize-control-ttfmake_font-typekit-font-heading span:after,
	.ttfmake-section-text .ttfmake-plus-info p:after,
	.make-plus-products .ttfmake-menu-list-item-link-icon-wrapper:before,
	.ttfmp-import-message strong:after,
	#accordion-section-ttfmake_stylekit h3:before {
		content: "Plus";
		position: relative;
		top: -1px;
		margin-left: 8px;
		padding: 3px 6px !important;
		line-height: 1.5 !important;
		font-size: 9px !important;
		color: #ffffff !important;
		background-color: #d54e21;
		letter-spacing: 1px;
		text-transform: uppercase;
		-webkit-font-smoothing: subpixel-antialiased;
	}
	a.ttfmake-customize-plus {
		margin-left: 0;
		color: #d54e21;
	}
	#accordion-section-ttfmake_stylekit h3:before {
		float: right;
		top: 2px;
		margin-right: 30px;
	}
	.ttfmp-import-message strong {
		display: inline-block;
		font-size: 14px;
		margin-bottom: 4px;
	}
	.make-plus-products .ttfmake-menu-list-item-link-icon-wrapper:before {
		position: relative;
		top: 38px;
		left: 17px;
	}
	.make-plus-products .section-type-description {
		color: #777777;
	}
	.ttfmake-menu-list-item.make-plus-products:hover .ttfmake-menu-list-item-link-icon-wrapper {
		border-color: #dfdfdf;
	}
	.make-plus-products .section-type-description a {
		color: #0074a2 !important;
		text-decoration: underline;
	}
	.make-plus-products .section-type-description a:hover,
	.make-plus-products .section-type-description a:focus {
		color: #2ea2cc !important;
	}
	</style>
<?php }

add_action( 'admin_head', 'ttfmake_plus_styles', 20 );
add_action( 'customize_controls_print_styles', 'ttfmake_plus_styles', 20 );
