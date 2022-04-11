<nav class="main-menu navbar-expand-lg navbar navbar-expand-md">
		<span class="navbar-brand" href="#">
			<?php if( has_custom_logo() ): ?>
				<?php the_custom_logo(); ?>
			<?php else: ?>
				<a href="<?php echo esc_url ( home_url('/') ); ?>">
					<span class="navbar-brand-main"><?php bloginfo( 'title' ); ?></span>
					<span class="navbar-brand-slogan"><?php bloginfo( 'description' ); ?></span>
				</a>
			<?php endif; ?>
				<?php if( get_theme_mod( 'secondary_logo_image' ) != '' ): ?>
					<a class="navbar-brand-secondary" href="<?php echo get_theme_mod('sec_secondary_logo_url'); ?>"><img src="<?php echo get_theme_mod( 'secondary_logo_image' );  ?>"></a>
				<?php endif; ?>
		</span>
		<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
			<div class="navbar-toggler__icon">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</button>
		<div class="collapse-container ms-auto">
			<div class="collapse navbar-collapse" id="main-menu">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'main-menu',
					'menu_id'        => 'primary-menu',
					'container' => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'menu_class' => '',
					'fallback_cb' => '__return_false',
					'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
					'depth' => 2,
					'walker' => new bootstrap_5_wp_nav_menu_walker()
				));
				?>
			</div>
		</div>
	</nav>