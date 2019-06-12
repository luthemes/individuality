<?php
/**
 * Individuality ( search.php )
 *
 * @package     Individuality
 * @copyright   Copyright (C) 2019. Benjamin Lu
 * @license     GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author      Benjamin Lu ( https://luthemes.com )
 */
?>
<?php get_header(); ?>
	<section id="content" class="site-content">
		<main id="main" class="content-area">
			<?php
				if ( have_posts() ) :
					printf(
						'<h1 class="entry-title">%1$s %2$s</h1>',
						esc_html__( 'Search for: ', 'individuality' ),
						'<span class="search-result">' . get_search_query() . '</span>'
					);
					while ( have_posts() ) : the_post();
						get_template_part( 'views/content/content', get_post_format() );
					endwhile;
					the_posts_pagination();
				else :
						get_template_part( 'views/content/content', 'none' );
				endif;
			?>
		</main>
	</section>
<?php get_footer(); ?>
