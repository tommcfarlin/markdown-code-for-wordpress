<?php
/**
 * Markdown Code For WordPress
 *
 * A simple WordPress plugin for replacing backticks with code, asterisks with emphasis, and double-asterisks
 * with strong tags in the content of posts, pages, and other post types.
 *
 * @package     MDC
 * @author      Tom McFarlin <tom@tommcfarlin.com>
 * @license     GPL-2.0+
 * @link        http://tommcfarlin.com/markdown-code-for-wordpress/
 * @copyright   2013 - 2104 Tom McFarlin
 *
 * @wordpress-plugin
 * Plugin Name: Markdown Code For WordPress
 * Plugin URI:  http://tommcfarlin.com/markdown-code-for-wordpress/
 * Description: A simple WordPress plugin for replacing backticks, asterisks, and double-asterisks with code, emphasis, and strong tags in your content and comments.
 * Version:     0.5.1
 * Author:      Tom McFarlin
 * Author URI:  http://tommcfarlin.com/
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: tommcfarlin/markdown-code-for-wordpress
 */

/**
 * TODO
 *
 * At this point, the plugin is getting to perform multiple string operations when it first started out focusing
 * only on code tags. Eventually, this will need to do two things:
 *
 * 1. Write the modified data to the database to improve retrieval and performance
 * 2. Consider going the parsing route (though I do feel that's a bit heavy handed for such a small subset of Markdown)
 *
 */

/**
 * Returns the post content formatted with proper replacements for Markdown code.
 *
 * @access public
 * @param  mixed    $content    The content of the post.
 * @return string               The content of the post with the backticks replaced with code tags.
 */
function mdc_the_content( $content ) {

	$content = preg_replace( '/`(.*?)`/', '<code>$1</code>', $content );
	$content = preg_replace( '/\*\*([^*\s].*?)\*\*/s', '<strong>$1</strong>', $content );
	$content = preg_replace( '/\*([^*\s].*?)\*/', '<em>$1</em>', $content );

	return $content;

} // mdc_the_content
add_filter( 'the_content', 'mdc_the_content' );