<?php
/**
 * Individuality ( content-single.php )
 *
 * @package   Individuality
 * @copyright Copyright (C) 2018-2019. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php Benlumia007\Backdrop\Entry\display_title(); ?>
	</header>
	<div class="entry-metadata">
		<?php Benlumia007\Backdrop\Entry\display_author(); ?>
		<?php Benlumia007\Backdrop\Entry\display_date(); ?>
		<?php Benlumia007\Backdrop\Entry\display_comments_link(); ?>
	</div>
	<?php if ( has_post_thumbnail() ) { ?>
		<figure class="post-thumbnail alignwide">
			<?php the_post_thumbnail( 'individuality-large-thumbnails' ); ?>
		</figure>
	<?php } ?>
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
		<?php Benlumia007\Backdrop\Entry\display_categories(); ?>
		<?php Benlumia007\Backdrop\Entry\display_tags(); ?>
	</div>
</article>
