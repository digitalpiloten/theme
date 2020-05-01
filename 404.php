<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Suki
 */

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

// Always disable page header on this page.
remove_action( 'suki/frontend/after_header', 'suki_page_header' );

/**
 * Header
 */
get_header();

/**
 * Error 404 content
 */
suki_get_template_part( 'error-404' );

/**
 * Footer
 */
get_footer();