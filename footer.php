<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
	</div><!-- #main .wrapper -->

	<div class="clear"></div>
	<div class="footer-dark-bg">
		<footer id="colophon" class="bwx-footer">
			<div class="site-info" role="contentinfo">
				<?php if(is_active_sidebar('bwx-footer-widget')) dynamic_sidebar('bwx-footer-widget'); ?>
				<?php
				if ( function_exists( 'the_privacy_policy_link' ) ) {
					the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
				}
				?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
