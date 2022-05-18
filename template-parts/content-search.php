<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wp_Theme_Boilerplate_by_Mike
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-container">
		<header class="entry-header">
			<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
			<?php if ('post' === get_post_type()) : ?>
				<?php wp_theme_boilerplate_by_mike_post_info(); ?>
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php wp_theme_boilerplate_by_mike_post_thumbnail(); ?>

		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php
				wp_theme_boilerplate_by_mike_entry_meta();
				wp_theme_boilerplate_by_mike_entry_footer(); 
			?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-<?php the_ID(); ?> -->