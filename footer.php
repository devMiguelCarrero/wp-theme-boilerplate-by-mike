<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wp_Theme_Boilerplate_by_Mike
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info container-fluid">
			<div class="compressed-container">
				<div class="row">
					<div class="col-12 col-md-3 footer-widget-area">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1')) : ?> <?php endif; ?>
					</div>
					<div class="col-12 col-md-6 footer-widget-area">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2')) : ?> <?php endif; ?>
					</div>
					<div class="col-12 col-md-3 footer-widget-area">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3')) : ?> <?php endif; ?>
					</div>
				</div>
			</div><!-- .compressed-container -->
		</div><!-- .site-info -->
		<div class="site-copyright container-fluid">
			<div class="compressed-container">
				<?php printf( get_theme_mod( 'sec_copyright', 'Proudly powered by Wordpress, Theme: Wp Theme Boilerplate by ' . '<a href="https://github.com/devMiguelCarrero/">devMiguelCarrero</a>' ), 'WordPress' ); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
