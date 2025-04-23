<?php
/**
 * Template tags.
 *
 * This file holds template tags for the theme. Template tags are PHP functions
 * meant for use within theme templates.
 *
 * @package   Individuality
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2025 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/individuality
 */

namespace Individuality;

/**
 * Returns the metadata separator.
 *
 * @since  1.0.0
 * @access public
 * @param  string  $sep  String to separate metadata.
 * @return string
 */
function sep( $sep = '' ) {

	return apply_filters(
		'individuality/sep',
		sprintf(
			'<span class="sep">%s</span>',
			$sep ?: esc_html_x( '&middot;', 'meta separator', 'individuality' )
		)
	);
}