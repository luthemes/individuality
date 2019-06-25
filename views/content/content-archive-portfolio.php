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
		<?php entry::display( 'entry-title' ); ?>
	</header>
	<div class="entry-content">
		<div class="portfolio-grid alignwide">
		<?php
				$posts_per_page = 9;
				$query          = new WP_Query(
					array(
						'post_type'      => 'portfolio',
						'posts_per_page' => $posts_per_page,
					)
				);
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						if ( has_post_thumbnail() ) {
							?>
								<div class="portfolio-items">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<?php the_post_thumbnail( 'backdrop-large-thumbnails' ); ?>
									</a>
									<div class="wp-caption">
										<div class="wp-caption-text">
											<h2 class="jetpack-portfolio-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail_caption(); ?></a></h2>
											<span><?php echo wptexturize( wp_strip_all_tags( get_post( get_post_thumbnail_id() )->post_content ) ); // phpcs:ignore ?></span>
										</div>
									</div>
								</div>
							<?php
						}
					}
				}
				wp_reset_postdata();
				?>
		</div>
	</div>
</article>
