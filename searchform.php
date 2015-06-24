<?php
/**
 * The template for displaying search forms in aThemes
 *
 * @package aThemes
 */
 
?>
<head>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'athemes' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Enter Search Text', 'placeholder', 'athemes' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php _ex( 'Search for:', 'label', 'athemes' ); ?>">
	</label>
<button type="submit" class="fa fa-search fa-lg search-submit">	</button> 
	
	
</form>
