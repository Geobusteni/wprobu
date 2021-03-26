<?php
/**
 * Theme main functionality.
 */

declare(strict_types=1);

namespace WPROBU;

defined('ABSPATH') || exit;

// Actions and filters.
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\\load_scripts' );

/**
 * Loading main scripts and style for the child theme.
 */
function load_scripts() {
    wp_enqueue_style( 'wprobu-style', get_stylesheet_uri(),
        array( 'twenty-twenty-one-style' ),
        wp_get_theme()->get('Version')
    );
}
