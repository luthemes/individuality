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
        <ul class="portfolio-grid alignwide">
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php the_post_thumbnail('backdrop-large-thumbnails'); ?>
                    </a>
					<div class="wp-caption">
						<div class="wp-caption-text">
							<h2 class="jetpack-portfolio-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail_caption(); ?></a></h2>
							<span><?php echo wptexturize( wp_strip_all_tags( get_post( get_post_thumbnail_id() )->post_content ) ); // phpcs:ignore ?></span>
						</div>
					</div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</article>