<?php
/**
 * Markdown Code For WordPress
 *
 * A simple WordPress plugin for replacing backticks with `code` tags in the content of posts, pages, and other post types.
 *
 * @package     MDC
 * @author      Tom McFarlin <tom@tommcfarlin.com>
 * @license     GPL-2.0+
 * @link        http://tommcfarlin.com/markdown-code-for-wordpress/
 * @copyright   2013 Tom McFarlin
 *
 * @wordpress-plugin
 * Plugin Name: Markdown Code For WordPress
 * Plugin URI:  http://tommcfarlin.com/markdown-code/
 * Description: A simple WordPress plugin for replacing backticks with code tags in the content of posts, pages, and other post types.
 * Version:     0.1.0
 * Author:      Tom McFarlin
 * Author URI:  http://tommcfarlin.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

/**
 * Returns the post content formatted with proper replacements for Markdown code.
 *
 * @access public
 * @param  mixed    $content    The content of the post.
 * @return string               The content of the post with the backticks replaced with code tags.
 */
function mdc_the_content( $content ) {
	return preg_replace_callback( "/[`].*?[`]/", 'mdc_code_tags', $content );
} // mdc_the_content
add_filter( 'the_content', 'mdc_the_content' );

/**
 * Replaces the backticks (`) with proper HTML <code></code> tags.
 *
 * @access public
 * @param  mixed    $arr_content    The array of the matched string from the regular expression
 * @return string                   The content of the post with the backticks replaced with code tags.
 */
function mdc_code_tags( $arr_content ) {
	return preg_replace( '/`/', '</code>', preg_replace( '/`/', '<code>', $arr_content[0], 1 ), 1 );
} // end mdc_code_tags