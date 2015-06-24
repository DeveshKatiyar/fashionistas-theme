<?php
/**
 * The template for displaying search forms in aThemes
 *
 * @package aThemes
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'athemes' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter Search Text', 'placeholder', 'athemes' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'athemes' ); ?>">
		<input type="searching" class="search-submit">
	</label>
	
</form>


<!-- <input class="search-submit" <?php echo printf( 'img src="search_.png"'); ?> -->
