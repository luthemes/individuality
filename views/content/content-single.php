<?php
/**
 * Individuality ( content-single.php )
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
			<?php printf( '<span class="sticky-post">%1$s</span>', esc_html__( 'Featured', 'individuality' ) ); ?>
		<?php } ?>
		<?php entry::display( 'entry-title' ); ?>
		<span class="entry-metadata"><?php entry::display( 'posted-on' ); ?></span>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'individuality' ),
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'individuality' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">,</span> ',
				)
			);
			?>
	</div>
	<div class="entry-taxonomies">
		<?php entry::display( 'taxonomies' ); ?>
	</div>
</article>
