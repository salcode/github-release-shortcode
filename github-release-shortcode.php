<?php
/*
 * Plugin Name: GitHub Release Shortcode
 * Plugin URI: http://salferrarello.com/github-release-wordpress-plugin/
 * Description: [github_release repo="salcode/bootstrap-genesis"] will create a link to the zip file for the latest release of that repo.
 * Version: 1.0.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: github-release-shortcode
 * Domain Path: /languages
 */
// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_shortcode( 'github_release', 'fe_github_release_sc' );

function fe_github_release_sc( $atts, $content='' ) {
    $atts = shortcode_atts(
	array(
	    'repo'  => 'salcode/github-release-shortcode',
	    'class' => 'btn btn-primary',
	),
	$atts,
	'github_release'
    );
    $output = '';

    $href = esc_url( fe_github_release_get_href( $atts['repo'] ) );
    $class = esc_attr( $atts['class'] );
    $content = esc_html( $content );

    if ( is_wp_error( $href ) ) {
	return "<strong>The link to the release on GitHub is currently unavailable</strong>";
    }

    $output .= "<a href=\"{$href}\" class=\"{$class}\">{$content}</a>";

    return $output;
}

function fe_github_release_get_href( $repo ) {
    // get from transient
    return 'http://example.com';
}
