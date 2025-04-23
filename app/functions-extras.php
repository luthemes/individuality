<?php
/**
 * Default extras template
 *
 * @package   Individuality
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/individuality
 */

 use function Backdrop\Fonts\enqueue;


/**
 * Changes the theme template path to the `public/views` folder.
 *
 * @since  1.0.0
 * @access public
 * @return string
 */
add_filter( 'backdrop/template/path', function() {

	return 'public/views';
} );

/**
 * Enqueues specific theme fonts.
 *
 * This function enqueues the specified fonts for use in the theme.
 *
 * @since  1.0.0
 * @access public
 * @return void
 */
add_action( 'wp_enqueue_scripts', function() {

	array_map( function( $file ) {
		enqueue( $file );
	}, [
		'fira-sans',
		'merriweather',
		'tangerine'
	] );
} );