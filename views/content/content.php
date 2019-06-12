<?php
/**
 * Individuality ( content.php )
 *
 * @package     Individuality
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://luthemes.com )
 */

use Benlumia007\Backdrop\Entry\Entry as entry;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) { ?>
			<?php printf( '<span class="sticky-post">%1$s</span>', esc_html__( 'Featured', 'Individuality' ) ); ?>
		<?php } ?>
		<?php entry::display( 'entry-title' ); ?>
		<span class="entry-metadata"><?php entry::display( 'posted-on' ); ?></span>
	</header>
	<figure class = "post-thumbnail alignwide">
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail( 'individuality-large-thumbnails' );
		}
		?>
	</figure>
	<div class="entry-excerpt">
		<?php the_excerpt(); ?>
	</div>
</article>
