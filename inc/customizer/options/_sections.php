<?php
/**
 * Customizer sections
 *
 * @package Suki
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

if ( suki_show_pro_teaser() ) {
	// Suki Pro link
	$wp_customize->add_section( new Suki_Customize_Section_Pro_Link( $wp_customize, 'suki_section_pro_link', array(
		'title'       => esc_html_x( 'More Options Available in Suki Pro', 'Suki Pro upsell', 'suki' ),
		'url'         => esc_url( add_query_arg( array( 'utm_source' => 'suki-customizer', 'utm_medium' => 'learn-more', 'utm_campaign' => 'theme-upsell' ), SUKI_PRO_URL ) ),
		'priority'    => 9999,
	) ) );
}

// ------
$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_global', array(
	'title'       => esc_html__( 'Global', 'suki' ),
	'priority'    => 0,
) ) );

// Global Settings
$panel = 'suki_panel_global_settings';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'Global Settings', 'suki' ),
	'priority'    => 121,
) );

	// Site Identity
	$wp_customize->get_section( 'title_tagline' )->panel = $panel;
	$wp_customize->get_section( 'title_tagline' )->priority = 10;

	// Homepage Settings
	$wp_customize->get_section( 'static_front_page' )->panel = $panel;
	$wp_customize->get_section( 'static_front_page' )->priority = 10;

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_global_20', array(
		'panel'       => $panel,
		'priority'    => 20,
	) ) );

	// Social
	$wp_customize->add_section( 'suki_section_social', array(
		'title'       => esc_html__( 'Social Media Links', 'suki' ),
		'description' => '<p>' . esc_html__( 'Please use full URL format with the protocol. For example: "https://" or "mailto:".', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 20,
	) );

	// Color Palette
	$wp_customize->add_section( 'suki_section_color_palette', array(
		'title'       => esc_html__( 'Color Palette', 'suki' ),
		'description' => '<p>' . esc_html__( 'Color palette makes it easier and faster to choose colors while designing your website.', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 20,
	) );

	// Google Fonts
	$wp_customize->add_section( 'suki_section_google_fonts', array(
		'title'       => esc_html__( 'Google Fonts', 'suki' ),
		'panel'       => $panel,
		'priority'    => 20,
	) );

// General Styles
$panel = 'suki_panel_general_styles';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'General Styles', 'suki' ),
	'priority'    => 122,
) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_typography', array(
		'title'       => esc_html__( 'Typography', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) ) );

	// Base
	$wp_customize->add_section( 'suki_section_base', array(
		'title'       => esc_html__( 'Base', 'suki' ),
		'description' => '<p>' . esc_html__( 'The global settings of body typography and colors.', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Headings (H1 - H4)
	$wp_customize->add_section( 'suki_section_headings', array(
		'title'       => esc_html__( 'Headings (H1 - H4)', 'suki' ),
		'description' => '<p>' . esc_html__( 'Used on all H1 - H4 tags globally.', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Blockquote
	$wp_customize->add_section( 'suki_section_blockquote', array(
		'title'       => esc_html__( 'Blockquote', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Form Input
	$wp_customize->add_section( 'suki_section_form_input', array(
		'title'       => esc_html__( 'Form Input', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Button
	$wp_customize->add_section( 'suki_section_button', array(
		'title'       => esc_html__( 'Button', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Title
	$wp_customize->add_section( 'suki_section_title', array(
		'title'       => esc_html__( 'Title', 'suki' ),
		'description' => '<p>' . esc_html__( 'Used on Default Post title and Static Page title. By default, it uses H1 styles.', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Small Title
	$wp_customize->add_section( 'suki_section_small_title', array(
		'title'       => esc_html__( 'Small Title', 'suki' ),
		'description' => '<p>' . esc_html__( 'Used on Grid Post title, and other subsidiary headings like "Leave a Reply", "2 Comments", etc. By default, it uses H3 styles.', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Meta Info
	$wp_customize->add_section( 'suki_section_meta', array(
		'title'       => esc_html__( 'Meta Info', 'suki' ),
		'description' => '<p>' . esc_html__( 'Used on Post meta, Widget meta, Comments meta, and other small info text.', 'suki' ) . '</p>',
		'panel'       => $panel,
		'priority'    => 10,
	) );

// ------
$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_layout', array(
	'title'       => esc_html__( 'Layout', 'suki' ),
	'priority'    => 130,
) ) );

// Page Canvas & Wrapper
$wp_customize->add_section( 'suki_section_page_canvas', array(
	'title'       => esc_html__( 'Page Canvas', 'suki' ),
	'priority'    => 131,
) );

// Header
$panel = 'suki_panel_header';
$switcher = '
<div class="suki-responsive-switcher nav-tab-wrapper wp-clearfix">
	<a href="#" class="nav-tab preview-desktop suki-responsive-switcher-button" data-device="desktop">
		<span class="dashicons dashicons-desktop"></span>
		<span>' . esc_html__( 'Desktop', 'suki' ) . '</span>
	</a>
	<a href="#" class="nav-tab preview-tablet preview-mobile suki-responsive-switcher-button" data-device="tablet">
		<span class="dashicons dashicons-smartphone"></span>
		<span>' . esc_html__( 'Tablet / Mobile', 'suki' ) . '</span>
	</a>
</div>
';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'Header', 'suki' ),
	'description' => $switcher,
	'priority'    => 132,
) );

	// Header Builder
	$wp_customize->add_section( 'suki_section_header_builder', array(
		'title'       => esc_html__( 'Header Builder', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_header_bars', array(
		'title'       => esc_html__( 'Areas', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) ) );

	// Top Bar
	$wp_customize->add_section( 'suki_section_header_top_bar', array(
		'title'       => esc_html__( 'Top Bar', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Main Bar
	$wp_customize->add_section( 'suki_section_header_main_bar', array(
		'title'       => esc_html__( 'Main Bar', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Bottom Bar
	$wp_customize->add_section( 'suki_section_header_bottom_bar', array(
		'title'       => esc_html__( 'Bottom Bar', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Mobile Main Bar
	$wp_customize->add_section( 'suki_section_header_mobile_main_bar', array(
		'title'       => esc_html__( 'Mobile Main Bar', 'suki' ),
		'panel'       => $panel,
		'priority'    => 20,
	) );

	// Mobile Drawer
	$wp_customize->add_section( 'suki_section_header_mobile_vertical_bar', array(
		'title'       => esc_html__( 'Mobile Popup', 'suki' ),
		'description' => esc_html__( 'This would appear when the "Toggle" element is clicked. Please make sure you have added the "Toggle" element into the Mobile Main Bar.', 'suki' ),
		'panel'       => $panel,
		'priority'    => 20,
	) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_header_elements', array(
		'title'       => esc_html__( 'Elements', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) ) );

	// Logo
	$wp_customize->add_section( 'suki_section_header_logo', array(
		'title'       => esc_html__( 'Logo', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// Menu
	$wp_customize->add_section( 'suki_section_header_menu', array(
		'title'       => esc_html__( 'Menu', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// Search
	$wp_customize->add_section( 'suki_section_header_search', array(
		'title'       => esc_html__( 'Search', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// HTML
	$wp_customize->add_section( 'suki_section_header_html', array(
		'title'       => esc_html__( 'HTML', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// Cart
	$wp_customize->add_section( 'suki_section_header_cart', array(
		'title'       => esc_html__( 'Shopping Cart', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// Social
	$wp_customize->add_section( 'suki_section_header_social', array(
		'title'       => esc_html__( 'Social', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	if ( suki_show_pro_teaser() ) {
		// More Options Available
		$wp_customize->add_section( new Suki_Customize_Section_Pro_Teaser( $wp_customize, 'suki_section_teaser_pro_upsell_header', array(
			'title'       => esc_html_x( 'More Options Available in Suki Pro', 'Suki Pro upsell', 'suki' ),
			'panel'       => $panel,
			'url'         => esc_url( add_query_arg( array( 'utm_source' => 'suki-customizer', 'utm_medium' => 'learn-more', 'utm_campaign' => 'theme-upsell' ), SUKI_PRO_URL ) ),
			'features'    => array(
				esc_html_x( 'More Header Elements: Button, Contact Info', 'Suki Pro upsell', 'suki' ),
				esc_html_x( 'Vertical Header', 'Suki Pro upsell', 'suki' ),
				esc_html_x( 'Transparent Header', 'Suki Pro upsell', 'suki' ),
				esc_html_x( 'Alternate Header Colors', 'Suki Pro upsell', 'suki' ),
				esc_html_x( 'Sticky Header', 'Suki Pro upsell', 'suki' ),
				esc_html_x( 'Mega Menu', 'Suki Pro upsell', 'suki' ),
			),
			'priority'    => 90,
		) ) );
	}

// Content & Sidebar
$panel = 'suki_panel_content';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'Content & Sidebar', 'suki' ),
	'priority'    => 133,
) );

	// Content Section
	$wp_customize->add_section( 'suki_section_content', array(
		'title'       => esc_html__( 'Content Section', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

		// Main Content Area
		$wp_customize->add_section( 'suki_section_main', array(
			'title'       => esc_html__( 'Main Content', 'suki' ),
			'panel'       => $panel,
			'priority'    => 10,
		) );

		// Sidebar Area
		$wp_customize->add_section( 'suki_section_sidebar', array(
			'title'       => esc_html__( 'Sidebar', 'suki' ),
			'panel'       => $panel,
			'priority'    => 10,
		) );

	// Hero Section
	$wp_customize->add_section( 'suki_section_hero', array(
		'title'       => esc_html__( 'Hero Section', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_content_breadcrumb', array(
		'panel'       => $panel,
		'priority'    => 20,
	) ) );

	// Breadcrumb
	$wp_customize->add_section( 'suki_section_breadcrumb', array(
		'title'       => esc_html__( 'Breadcrumb', 'suki' ),
		'panel'       => $panel,
		'priority'    => 20,
	) );

// Footer
$panel = 'suki_panel_footer';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'Footer', 'suki' ),
	'priority'    => 134,
) );

	// Footer Builder
	$wp_customize->add_section( 'suki_section_footer_builder', array(
		'title'       => esc_html__( 'Footer Builder', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_footer_bars', array(
		'title'       => esc_html__( 'Areas', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) ) );

	// Widgets Bar
	$wp_customize->add_section( 'suki_section_footer_widgets_bar', array(
		'title'       => esc_html__( 'Widgets Bar', 'suki' ),
		'panel'       => $panel,
		'priority'    => 20,
	) );

	// Bottom Bar
	$wp_customize->add_section( 'suki_section_footer_bottom_bar', array(
		'title'       => esc_html__( 'Bottom Bar', 'suki' ),
		'panel'       => $panel,
		'priority'    => 20,
	) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_footer_elements', array(
		'title'       => esc_html__( 'Elements', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) ) );

	// Copyright
	$wp_customize->add_section( 'suki_section_footer_copyright', array(
		'title'       => esc_html__( 'Copyright', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// HTML
	$wp_customize->add_section( 'suki_section_footer_html', array(
		'title'       => esc_html__( 'HTML', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// Social
	$wp_customize->add_section( 'suki_section_footer_social', array(
		'title'       => esc_html__( 'Social', 'suki' ),
		'panel'       => $panel,
		'priority'    => 30,
	) );

	// Scroll To Top
	$wp_customize->add_section( 'suki_section_scroll_to_top', array(
		'title'       => esc_html__( 'Scroll To Top', 'suki' ),
		'panel'       => $panel,
		'priority'    => 39,
	) );

	if ( suki_show_pro_teaser() ) {
		// More Options Available
		$wp_customize->add_section( new Suki_Customize_Section_Pro_Teaser( $wp_customize, 'suki_section_teaser_pro_upsell_footer', array(
			'title'       => esc_html_x( 'More Options Available in Suki Pro', 'Suki Pro upsell', 'suki' ),
			'panel'       => $panel,
			'url'         => esc_url( add_query_arg( array( 'utm_source' => 'suki-customizer', 'utm_medium' => 'learn-more', 'utm_campaign' => 'theme-upsell' ), SUKI_PRO_URL ) ),
			'features'    => array(
				esc_html_x( 'Dynamic & Responsive Widgets Column Width', 'Suki Pro upsell', 'suki' ),
			),
			'priority'    => 90,
		) ) );
	}

// ------
$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_pages', array(
	'title'       => esc_html__( 'Pages', 'suki' ),
	'priority'    => 140,
) ) );

// Blog
$panel = 'suki_panel_blog';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'Blog', 'suki' ),
	'priority'    => 141,
) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_blog_pages', array(
		'title'       => esc_html__( 'Pages', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) ) );

	// Post Index
	$wp_customize->add_section( 'suki_section_blog_index', array(
		'title'       => esc_html__( 'Posts Archive Page', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Default
	$wp_customize->add_section( 'suki_section_entry_default', array(
		'title'       => esc_html__( 'Default', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Grid
	$wp_customize->add_section( 'suki_section_entry_grid', array(
		'title'       => esc_html__( 'Grid', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Single Post Page
	$wp_customize->add_section( 'suki_section_blog_single', array(
		'title'       => esc_html__( 'Single Post Page', 'suki' ),
		'panel'       => $panel,
		'priority'    => 15,
	) );

// Other Pages
$panel = 'suki_panel_other_pages';
$wp_customize->add_panel( $panel, array(
	'title'       => esc_html__( 'Other Pages', 'suki' ),
	'priority'    => 149,
) );

	// ------
	$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_page_settings_others', array(
		'title'       => esc_html__( 'Standard Pages', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) ) );

	// Static Page
	$wp_customize->add_section( 'suki_section_page_singular', array(
		'title'       => esc_html__( 'Static Page', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Search Results Page
	$wp_customize->add_section( 'suki_section_search', array(
		'title'       => esc_html__( 'Search Results Page', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Error 404 Page
	$wp_customize->add_section( 'suki_section_error_404', array(
		'title'       => esc_html__( 'Error 404 Page', 'suki' ),
		'panel'       => $panel,
		'priority'    => 10,
	) );

	// Begin registering sections.
	$i = 10;
	foreach ( Suki_Customizer::instance()->get_all_page_settings_types() as $ps_type => $ps_data ) {
		if ( in_array( $ps_type, array( 'post_archive', 'post_singular', 'product_archive', 'product_singular', 'page_singular', 'search', '404' ) ) ) {
			continue;
		}

		// Get post type object.
		// First check if $ps_type is not for 404 and search page.
		$post_type_slug = preg_replace( '/(_singular|_archive)/', '', $ps_type );
		$post_type_obj = get_post_type_object( $post_type_slug );

		// Increment section priority.
		$i += 10;

		// Add separator 
		if ( 0 < strpos( $ps_type, '_archive' ) ) {
			$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_page_settings_' . $post_type_slug, array(
				/* translators: %s: Custom post type's plural name. */
				'title'       => $post_type_obj->labels->name,
				'panel'       => $panel,
				'priority'    => $i,
			) ) );
		}

		$description = suki_array_value( $ps_data, 'description' );

		$wp_customize->add_section( suki_array_value( $ps_data, 'section' ), array(
			'title'       => suki_array_value( $ps_data, 'title' ),
			'panel'       => $panel,
			'description' => ! empty( $description ) ? '<p>' . $description . '</p>' : '',
			'priority'    => $i,
		) );
	}

// ------
$wp_customize->add_section( new Suki_Customize_Section_Spacer( $wp_customize, 'suki_section_spacer_others', array(
	'title'       => esc_html__( 'Others', 'suki' ),
	'priority'    => 159,
) ) );