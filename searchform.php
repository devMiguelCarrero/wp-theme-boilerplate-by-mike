<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package Mike Ecommerce
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'mike-ecommerce' ); ?></span>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'mike-ecommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<?php if( class_exists( 'WooCommerce' ) ): ?>
		<input type="hidden" value="product" name="post_type[]">
		<input type="hidden" value="post" name="post_type[]">
	<?php endif; ?>
	<button type="submit" class="search-submit"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>