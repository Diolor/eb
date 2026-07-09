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

/**
 * Custom post types: events (Kalender) and press clippings (Pressespiegel).
 * Both render only on the front page – they have no single pages or archives.
 */
function ewb_register_post_types() {
	register_post_type(
		'ewb_event',
		array(
			'labels'              => array(
				'name'          => 'Veranstaltungen',
				'singular_name' => 'Veranstaltung',
				'add_new_item'  => 'Neue Veranstaltung',
				'edit_item'     => 'Veranstaltung bearbeiten',
			),
			'public'              => false,
			'show_ui'             => true,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-calendar-alt',
			'supports'            => array( 'title', 'editor', 'custom-fields' ),
			'exclude_from_search' => true,
			'can_export'          => true,
		)
	);

	register_post_type(
		'ewb_press',
		array(
			'labels'              => array(
				'name'          => 'Pressespiegel',
				'singular_name' => 'Presseartikel',
				'add_new_item'  => 'Neuer Presseartikel',
				'edit_item'     => 'Presseartikel bearbeiten',
			),
			'public'              => false,
			'show_ui'             => true,
			'show_in_rest'        => true,
			'menu_icon'           => 'dashicons-media-document',
			'supports'            => array( 'title', 'custom-fields' ),
			'exclude_from_search' => true,
			'can_export'          => true,
		)
	);

	$metas = array(
		'ewb_event' => array( 'ewb_event_date', 'ewb_event_time_label' ),
		'ewb_press' => array( 'ewb_press_outlet', 'ewb_press_url', 'ewb_press_date_label', 'ewb_press_sub' ),
	);
	foreach ( $metas as $post_type => $keys ) {
		foreach ( $keys as $key ) {
			register_post_meta(
				$post_type,
				$key,
				array(
					'show_in_rest'  => true,
					'single'        => true,
					'type'          => 'string',
					'auth_callback' => function () {
						return current_user_can( 'edit_posts' );
					},
				)
			);
		}
	}
}
add_action( 'init', 'ewb_register_post_types' );

/**
 * Month names for the calendar timeline, per site language.
 */
function ewb_month_names( $lang ) {
	$months = array(
		'de' => array( 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember' ),
		'en' => array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' ),
		'tr' => array( 'Ocak', 'Şubat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık' ),
	);
	return $months[ $lang ];
}

/**
 * Trilingual "<strong>25</strong><span …>Juni 2023</span>…" block for a Y-m-d date.
 */
function ewb_timeline_date_html( $date_ymd ) {
	$ts    = strtotime( $date_ymd );
	$day   = (int) gmdate( 'j', $ts );
	$month = (int) gmdate( 'n', $ts ) - 1;
	$year  = gmdate( 'Y', $ts );
	$html  = '<strong>' . $day . '</strong>';
	foreach ( array( 'de', 'en', 'tr' ) as $lang ) {
		$names = ewb_month_names( $lang );
		$html .= '<span class="' . $lang . '">' . $names[ $month ] . ' ' . $year . '</span>';
	}
	return $html;
}
