<?php
/**
 * Individuality ( single.php )
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
				while ( have_posts() ) : the_post();
					get_template_part( 'views/content/content', 'single' );
				endwhile;
				comments_template();
			?>
		</main>
	</section>
<?php get_footer(); ?>
