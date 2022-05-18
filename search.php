<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Wp_Theme_Boilerplate_by_Mike
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php if (have_posts()) : ?>
		<header class="page-header wtb-section border-section">
			<div class="compressed-container">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf(esc_html__('Search Results for: %s', 'wp-theme-boilerplate-by-mike'), '<span>' . get_search_query() . '</span>');
					?>
				</h1>
			</div>
		</header><!-- .page-header -->
		<div class="wtb-section">
			<div class="compressed-container">
				<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();
				?>
			</div>
		</div>
	<?php
	else :

		get_template_part('template-parts/content', 'none');

	endif;

	?>
</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
