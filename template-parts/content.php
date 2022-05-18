<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wp_Theme_Boilerplate_by_Mike
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if (!is_singular()) :
	?>
		<div class="article-container">
		<?php
	endif;
		?>
		<?php
		if (is_singular()) :
		?>
			<header class="entry-header wtb-section border-section">
				<div class="compressed-container">
					<?php
					the_title('<h1 class="entry-title">', '</h1>');
					if ('post' === get_post_type()) :
						wp_theme_boilerplate_by_mike_post_info();
						wp_theme_boilerplate_by_mike_entry_meta();
					endif;
					?>
				</div>
			</header><!-- .entry-header -->
		<?php
		else :
		?>
			<header class="entry-header">
				<?php
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				if ('post' === get_post_type()) :
					wp_theme_boilerplate_by_mike_post_info();
				endif;
				?>
			</header><!-- .entry-header -->
		<?php
		endif;
		?>
		<div class="entry-content">
			<?php
			if (is_singular()) :
			?>
				<div class="wtb-section border-section">
					<div class="compressed-container">
						<?php
						wp_theme_boilerplate_by_mike_post_thumbnail();
						the_content(
							sprintf(
								wp_kses(
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-theme-boilerplate-by-mike'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);
						?>
					</div>
				</div>
			<?php
			else :
				the_excerpt();
				wp_theme_boilerplate_by_mike_entry_meta();
				wp_theme_boilerplate_by_mike_entry_footer();
			endif;

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'wp-theme-boilerplate-by-mike'),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->
		<?php
		if (!is_singular()) :
		?>
		</div>
	<?php
		endif;
	?>
</article><!-- #post-<?php the_ID(); ?> -->