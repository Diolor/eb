<?php
/**
 * Emmauswald bleibt! theme functions.
 */

define( 'EWB_PETITION_URL_DEFAULT', 'https://www.change.org/p/schutz-des-waldes-durch-die-verhinderung-der-bebauung-des-emmauskirchhofs-in-neuk%C3%B6lln' );
define( 'EWB_TELEGRAM_URL_DEFAULT', 'https://t.me/+Ze9FpWfUCNdjMDg6' );

function ewb_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
}
add_action( 'after_setup_theme', 'ewb_setup' );

function ewb_enqueue_assets() {
	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style(
		'ewb-fonts',
		'https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&display=swap',
		array(),
		null
	);
	wp_enqueue_style( 'ewb-style', get_template_directory_uri() . '/assets/css/style.css', array( 'ewb-fonts' ), $version );
	wp_enqueue_script( 'ewb-main', get_template_directory_uri() . '/assets/js/main.js', array(), $version, true );
}
add_action( 'wp_enqueue_scripts', 'ewb_enqueue_assets' );

function ewb_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = 'https://fonts.googleapis.com';
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'ewb_resource_hints', 10, 2 );

// Fall back to the initiative logo when no site icon is set in the Customizer.
function ewb_favicon_fallback() {
	if ( ! has_site_icon() ) {
		printf(
			'<link rel="icon" type="image/png" href="%s">' . "\n",
			esc_url( get_template_directory_uri() . '/assets/img/EmmausWald_logo_centered.png' )
		);
	}
}
add_action( 'wp_head', 'ewb_favicon_fallback' );

function ewb_robots( $robots ) {
	if ( is_page( 'impressum' ) ) {
		$robots['noindex'] = true;
	}
	return $robots;
}
add_filter( 'wp_robots', 'ewb_robots' );

/**
 * Customizer: campaign links that appear all over the site.
 */
function ewb_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'ewb_campaign',
		array(
			'title'    => 'Emmauswald: Links / Kampagne',
			'priority' => 30,
		)
	);

	$wp_customize->add_setting(
		'ewb_petition_url',
		array(
			'default'           => EWB_PETITION_URL_DEFAULT,
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'ewb_petition_url',
		array(
			'label'   => 'Petition-URL',
			'section' => 'ewb_campaign',
			'type'    => 'url',
		)
	);

	$wp_customize->add_setting(
		'ewb_telegram_url',
		array(
			'default'           => EWB_TELEGRAM_URL_DEFAULT,
			'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control(
		'ewb_telegram_url',
		array(
			'label'   => 'Telegram-Gruppen-URL',
			'section' => 'ewb_campaign',
			'type'    => 'url',
		)
	);
}
add_action( 'customize_register', 'ewb_customize_register' );

function ewb_petition_url() {
	return get_theme_mod( 'ewb_petition_url', EWB_PETITION_URL_DEFAULT );
}

function ewb_telegram_url() {
	return get_theme_mod( 'ewb_telegram_url', EWB_TELEGRAM_URL_DEFAULT );
}
