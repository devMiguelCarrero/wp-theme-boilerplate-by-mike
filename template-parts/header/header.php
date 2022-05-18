<header id="masthead" class="site-header wtb-section border-section">
	<div class="site-branding container-fluid">
		<?php
		the_custom_logo();
		?>
		<h1 class="site-title"><?php bloginfo('name'); ?></h1>
		<?php
		$wp_theme_boilerplate_by_mike_description = get_bloginfo('description', 'display');
		if ($wp_theme_boilerplate_by_mike_description || is_customize_preview()) :
		?>
			<h3 class="site-description">
				<?php echo $wp_theme_boilerplate_by_mike_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
				?>
			</h3>
		<?php endif; ?>
	</div><!-- .site-branding -->
</header><!-- #masthead -->