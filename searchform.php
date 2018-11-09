<?php
/**
 * Template for displaying search forms
 *
 * @package WordPress
 * @subpackage Balanceworx2018
 * @since 1.0
 * @version 1.0
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo $unique_id; ?>">
		<span class="screen-reader-text">Search For:</span>
	</label>
  <!-- <input type="hidden" name="post_type[]" value="articles" /> -->
  <input type="hidden" name="post_type[]" value="post" />
  <input type="hidden" name="post_type[]" value="product" />
  <!-- <input type="hidden" name="post_type[]" value="books" />   -->
	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwelve' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><i class="fa fa-search"></i><span class="screen-reader-text">Submit search</span></button>
</form>
